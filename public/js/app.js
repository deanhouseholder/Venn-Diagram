jQuery(function ($) {
    $("area").on('mouseover', function() {
        var ppWidth = $('#SkillsVennDiagramImg').width();
        var ppHeight = $('#SkillsVennDiagramImg').height();
        var ppCoordsArray = $(this).attr('coords').split(',');
        var ppX1 = parseInt(ppCoordsArray[0]);
        var ppY1 = parseInt(ppCoordsArray[1]);
        var ppX2 = parseInt(ppCoordsArray[2]);
        var ppMargin = 20;
        var ppBuffer = 40;
        var ppModalMax = 800;

        if (ppX1 < (ppWidth / 2)) { // Menu opens to the Right
            var ppDivWidth = ppWidth - ppX2;
            var ppXPos = ppX2;
        } else { // Menu opens to the Left
            if (ppX1 > ppModalMax) { // Wide format
                var ppDivWidth = ppModalMax;
                var ppXPos = ppX1 - ppDivWidth - ppBuffer;
            } else { // Narrow format
                var ppDivWidth = ppX1 - ppMargin;
                var ppXPos = ppMargin;
            }
        }

        // Sanity checks
        if (ppXPos < 0) {
            ppXPos = ppMargin;
        }
        if (ppDivWidth > ppModalMax) {
            ppDivWidth = ppModalMax;
        }

        var ppModalDiv = $('#' + $(this).data('divname'));
        ppModalDiv.css("left", ppXPos + 'px').css("top", ppY1 + 'px').css("width", ppDivWidth + 'px');

        // Raise div if it extends below image
        var ppDivHeight = ppModalDiv.height();
        var ppDivYBottom = ppY1 + ppDivHeight + ppBuffer;
        if (ppDivYBottom > ppHeight) {
            var ppDivNewTop = ppHeight - ppDivHeight - ppBuffer - ppMargin;
            if (ppDivNewTop < 0) {
                ppDivNewTop = 0;
            }
            ppModalDiv.css("top", ppDivNewTop + 'px')
        }

        ppModalDiv.show();
    }).on('mouseout', function() {
        var ppModalDiv = $('#' + $(this).data('divname'));
        ppModalDiv.hide();
    });

    $("div.venn_modal").on('mouseover', function() {
        $(this).show();
    }).on('mouseout', function() {
        $(this).hide();
    });

    $('img[usemap]').imageMap();
});
