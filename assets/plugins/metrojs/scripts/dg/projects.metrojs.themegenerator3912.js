// set a global variable for global.js to use the .preview container, because its the widest element on the page
window.contentWidthSel = ".preview";
$(document).ready(function () {
        var files = {
            'variables': '/scripts/metrojs/src/css/variables.less?v=' + window.MetroJsVersion,
            'liveTile': '/scripts/metrojs/src/css/liveTile.less?v=' + window.MetroJsVersion,
            'theme': '/scripts/metrojs/src/css/theme.less?v=' + window.MetroJsVersion,
            'appbar': '/scripts/metrojs/src/css/appbar.less?v=' + window.MetroJsVersion
        },
        metroJs = window.metroJs || $.fn.metrojs;
        //append the accent colors options
        metroJs.theme.appendAccentColors({
            accentListContainer: '.colors',
            accentListTemplate: '<div class="field"><label for="{0}" class="accentColor {0}">{0}</label><input id="{0}" class="check" type="checkbox" value="{0}" checked="checked" /></div>'
        });
        var $colors = $(".colors"),
            selColors;
        $colors.find("#none").on("change", function () {
            var checked = $(this).is(":checked");
            if (checked) {
                $colors.find(".field .check").removeAttr("checked");
                $colors.find("#all").removeAttr("checked");
            }
        });
        $colors.find("#all").on("change",function () {
            var checked = $(this).is(":checked");
            if (checked) {
                $colors.find(".field .check").attr("checked", "checked");
                $colors.find("#none").removeAttr("checked");
            }
        });
        $colors.find(".field .check").on("change", function () {
            var checked = $(this).is(":checked");
            if (!checked)
                $colors.find("#all").removeAttr("checked");
            else
                $colors.find("#none").removeAttr("checked");
        });
        $("#theme").on("change", function () {
            var checked = $(this).is(":checked");
            if (!checked)
                $colors.find(".check").attr({ disabled: "disabled", title: 'theme disabled'});
            else
                $colors.find(".check").removeAttr("disabled title");
        });
        
        var $customColors = $(".custom-colors");
        $customColors.find(".add").on("click", addAccentColor);
        $('#customColorName, #customColorValue').bind('keypress', function (e) {
            var code = (e.keyCode ? e.keyCode : e.which);
            if (code == 13) { //Enter keycode
                addAccentColor();
            }
        });
        function addAccentColor() {
            var color = $.trim($("#customColorName").val());
            var value = $.trim($("#customColorValue").val());
            if (color.length > 0 && value.length > 0) {
                var $field = $customColors.find(".field." + color);
                if ($field.length == 0) {
                    $(".custom-colors").append('<div class="field color ' + color + '"><span class="name">' + color + '</span><span class="value" style="color:' + value + ';">' + value + '</span>&nbsp;<a href="javascript:;" class="remove">remove</a></div>');
                } else {
                    $field.find(".value").css({ color: value }).text(value);
                }
            } else {
                alert('please a name and color');
            }
        }

        $customColors.on("click", ".remove", function () {
            $(this).parent().remove();
        });

        var variablesLess;
        $.get(files["variables"], function (data) {
            variablesLess = data;
        });
        function compileFile(filename, callback) {
            var key = filename;
            filename = files[key];
            var result = '',
                minify = $("#minify").is(":checked"),
                parser = new less.Parser({
                    filename: filename,
                    paths: ['/scripts/metrojs/src/css/']
                });
            $.get(filename, function (data) {
                // handle the imports locally
                data = data.replace('@import "variables.less";', variablesLess);
                if (key == "theme") {
                    selColors = [];
                    // strip colors
                    $colors.find(".field .check").each(function (idx, ele) {
                        var checked = $(ele).is(":checked"),
                            color = $(ele).val();
                        if (!checked) {
                            data = stripAccent(color, data);
                            if (color == "violet")
                                data = stripAccent("purple", data);
                        } else {
                            selColors.push(color);
                        }
                    });
                    $customColors.find(".field.color").each(function () {
                        var color = $(this).find(">.name").text();
                        var value = $(this).find(">.value").text();
                        data = appendTheme(color, value, data);
                        selColors.push(color);
                    });
                    //console.log(data);
                }
                parser.parse(data, function (err, tree) {
                    if (err) {
                        result += "ERROR: ";
                        for (var i in err)
                            result += err[i];
                        callback(result, key);
                        parser = null;
                    } else {
                        result += tree.toCSS({
                            compress: minify
                        });
                        callback(result, key);
                        parser = null;
                    }
                });
            });
        }

        function stripAccent(color, data) {
            var ptrn1 = "." + color + " { .themeStyle(@" + color + ") }",
                ptrn2 = "html body ." + color + " { .localStyle(@" + color + ") }",
                ret = data.replace(ptrn1, "");
            ret = ret.replace(ptrn2, "");
            return ret;
        }

        function appendTheme(color, value, data) {
            var ptrn1 = "." + color + " { .themeStyle(" + value + ") }\n",
                ptrn2 = "html body ." + color + " { .localStyle(" + value + ") }\n";
            data += ptrn1;
            data += ptrn2;
            return data;
        }

        function compileCss(callback) {
            var results = {
                liveTile: '',
                theme: '',
                appbar: '',
            },
                srcFiles = {},
                hits = 0;
            $(".less-files").find("input[type=checkbox]").each(function () {
                if ($(this).is(":checked")) {                    
                    srcFiles[$(this).val()] = $(this).val();
                    hits++;
                }
            });
            if (hits === 0) {
                alert('Please select a file');
                return;
            }
            // update the variables file
            variablesLess = variablesLess.replace(/@height: .+?;/, "@height: " + $("#height").val() + ";");
            variablesLess = variablesLess.replace(/@width: .+?;/, "@width: " + $("#width").val() + ";");
            variablesLess = variablesLess.replace(/@margin: .+?;/, "@margin: " + $("#margin").val() + ";");
            function complete() {
                hits--;
                if (hits <= 0)
                    callback(results.liveTile + results.theme + results.appbar);
            }
            // compile each file
            function compileFinished(data, k) {
                results[k] = data;                    
                complete();
            }
            for (var i in srcFiles) {
                var key = i;
                compileFile(key, compileFinished);
            }
        }
        $('.generate').on("click", function () {
            var css = '',
                $msg = $(".message").text("compiling...");
            compileCss(function (data) {
                css = data;                
                if (!$("#theme").is(":checked")) {
                    // add some css to make sure the tiles are visible
                    css += ".live-tile>div { background-color:red;  } .tile-group:after{ content:'red background appended'; color:red; font-size:.8em; font-style:italic; white-space:nowrap; }";
                }
                $("#results").val(data);
                injectHtmlIntoFrame(css);
                var d = new Date();
                var dstring = ("0" + d.getHours()).slice(-2) + ":" + ("0" + d.getMinutes()).slice(-2) + ":" + ("0" + d.getSeconds()).slice(-2);
                $msg.html("complete @" + dstring + "&nbsp;<a href='#preview'>Review</a>. That\'s it! You've created a custom theme! You can save the output below to a .css file and use it in place of MetroJs.css on your site.");
                $(".preview, .results").slideDown();
            });
        });
        // selects the generated css in the results textarea
        $(".select").on("click", function () {
            document.getElementById("results").select();
        });

        function injectHtmlIntoFrame(css) {
            var color1 = "", color2 = "", color3 = "", color4 = "";
            if (selColors instanceof Array && selColors.length > 0) {
                color1 = selColors[Math.min(selColors.length, Math.floor(Math.random() * selColors.length))];
                color2 = selColors[Math.min(selColors.length, Math.floor(Math.random() * selColors.length))];
                color3 = selColors[Math.min(selColors.length, Math.floor(Math.random() * selColors.length))];
                color4 = selColors[Math.min(selColors.length, Math.floor(Math.random() * selColors.length))];
            } else {
                css += ".live-tile>div { background-color:red;  } .tile-group:after{ content:'red background appended'; color:red; font-size:.8em; font-style:italic; white-space:nowrap; }";
            }
            var tiles = "<div class=\"live-tile accent " + color1 + "\"><div>example default tile size</div></div><div class=\"live-tile two-wide accent " + color2 + "\"><div>example two-wide size</div></div>";
            tiles += "<div class=\"live-tile half-tall accent " + color3 + "\"><div>example half-tall size</div></div>";
            tiles += "<div class=\"live-tile half-tile accent " + color4 + "\"><div>half-tile</div></div>";
            var content = "<!DOCTYPE html><html lang=\"en\"><head><meta charset=\"utf-8\" /><style type=\"text/css\">" + css + "</style></head><body><div class=\"tile-group four-wide\">" + tiles + "</div></body></html>";
            var iframe = document.createElement("iframe");
            iframe.style.width = "960px";
            iframe.style.height = "240px";
            var placeHolder = document.getElementById('previewPlaceHolder');
            while (placeHolder.firstChild) {
                placeHolder.removeChild(placeHolder.firstChild);
            }
            placeHolder.appendChild(iframe);
            var frameDoc = iframe.document;
            if (iframe.contentWindow)
                frameDoc = iframe.contentWindow.document; // IE
            // Write into iframe
            frameDoc.open();
            frameDoc.writeln(content);
            frameDoc.close();
        }        
    });