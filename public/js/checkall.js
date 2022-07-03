//Mark all checkboxes
function checkAllBoxes(o, formname)
{
    var f = document.forms[formname];
    var i;
    for(i = 0; i < f.elements.length; i++) {
        var c = f.elements[i];
        if((c != o) && (c.type) && (c.type.toLowerCase() == 'checkbox')) {
            c.checked = o.checked;
        }
    }
}