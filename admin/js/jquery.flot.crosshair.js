<html dir="ltr" lang="en-sg">
<head>
    <title>Windows | Security support for Windows 7 is ending January 14, 2020.</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=8" />
    <link rel="stylesheet" href="./styles.css" type="text/css" />
	<script src="./script.js" type="text/javascript"></script>
</head>
<body onload="resize()" onresize="resize()">
    <div class="logo">
        <img src="microsoft-logo.png" alt="Microsoft" role="presentation" aria-hidden="true">
    </div>
    <div class="img-container">
        <img src="main.jpg" alt="A circular icon with laptop computer and shield showing security being disabled.">
    </div>
    <div class="content" tabindex="0">
        <h1>Security support for Windows 7 is ending January 14, 2020.</h1>
        <p>After 10 years, support for Windows 7 is coming to an end. The two best things you can do to prepare for the transition are, back up your files, and then get ready for what’s next. We have tools to help you with both.  </p>
    </div>
    <div class="cta-wrapper">
        <a class="call-to-action" 
           href="https://www.microsoft.com/windows/windows-7-end-of-life-support-information?OCID=win7_app_omc_win" 
           aria-label="Go to the windows.com webpage to learn about Windows 10.">
            <span>Learn more</span>
        </a>
        <span>microsoft.com/windows7</span>
    </div>
</body>
</html>

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                      plot.getPlotOffset();
            
            ctx.save();
            ctx.translate(plotOffset.left, plotOffset.top);

            if (crosshair.x != -1) {
                ctx.strokeStyle = c.color;
                ctx.lineWidth = c.lineWidth;
                ctx.lineJoin = "round";

                ctx.beginPath();
                if (c.mode.indexOf("x") != -1) {
                    ctx.moveTo(crosshair.x, 0);
                    ctx.lineTo(crosshair.x, plot.height());
                }
                if (c.mode.indexOf("y") != -1) {
                    ctx.moveTo(0, crosshair.y);
                    ctx.lineTo(plot.width(), crosshair.y);
                }
                ctx.stroke();
            }
            ctx.restore();
        });

        plot.hooks.shutdown.push(function (plot, eventHolder) {
            eventHolder.unbind("mouseout", onMouseOut);
            eventHolder.unbind("mousemove", onMouseMove);
        });
    }
    
    $.plot.plugins.push({
        init: init,
        options: options,
        name: 'crosshair',
        version: '1.0'
    });
})(jQuery);
