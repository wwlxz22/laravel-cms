/**
 * Created by xiaozhen on 2017/2/21.
 */
function checkall() {
    if($('#title').val()=='')
    {
        $('#title').focus();
        return false;
    }
    if($('#type').val()=='')
    {
        $('#type').focus();
        return false;
    }
    if($('#top').val()=='')
    {
        $('#top').focus();
        return false;
    }
    if($('#content').val()=='')
    {
        $('#content').focus();
        return false;
    }
}