/*
Copyright (c) 2003-2011, CKSource - Frederico Knabben. All rights reserved.
For licensing, see LICENSE.html or http://ckeditor.com/license
*/

/*CKEDITOR.editorConfig = function( config )
{
	// Define changes to default configuration here. For example:
	// config.language = 'fr';
	// config.uiColor = '#AADC6E';
}; */

function removeUnwantedTools( toolbar )
{
    if (typeof(removeButtons) == "undefined") { return toolbar; }
    var filteredTools = new Array();
    for(var i = 0, len = toolbar.length; i < len; i++)
    {
        var element = toolbar[i];
        if (element instanceof Array)
        {
            filteredTools.push(
                removeUnwantedTools(element)); //perhaps don't add if empty
        }
        else if (removeButtons.indexOf(element) == -1)
        {
            filteredTools.push(element);
        }
        // else just ignore the element present on the removeButtons list
    }
    return filteredTools;
}
CKEDITOR.editorConfig = function( config ) {
    config.toolbar_Full = removeUnwantedTools([
    ['Source','-','Save','NewPage','Preview','-','Templates'],
    ['Cut','Copy','Paste','PasteText','PasteFromWord','-','Print', 'SpellChecker', 'Scayt'],
    ['Undo','Redo','-','Find','Replace','-','SelectAll','RemoveFormat'],
    ['Form', 'Checkbox', 'Radio', 'TextField', 'Textarea', 'Select', 'Button', 'ImageButton', 'HiddenField'],
    ['Image','Table','HorizontalRule','Smiley','SpecialChar','PageBreak'],
    ['Bold','Italic','Underline','Strike','-','Subscript','Superscript'],
    ['NumberedList','BulletedList','-','Outdent','Indent','Blockquote','CreateDiv'],
    ['JustifyLeft','JustifyCenter','JustifyRight','JustifyBlock'],
    ['BidiLtr', 'BidiRtl' ],
    ['Link','Unlink','Anchor'],
    '/',
    ['Styles','Format','Font','FontSize'],
    ['TextColor','BGColor'],
    ['Maximize', 'ShowBlocks','-','About']
    ]);
    
}

