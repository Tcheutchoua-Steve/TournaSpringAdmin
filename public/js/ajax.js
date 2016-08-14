/**
 * Created with JetBrains PhpStorm.
 * User: tcheutchoua
 * Date: 8/14/16
 * Time: 11:33 AM
 * To change this template use File | Settings | File Templates.
 */
$(document).ready(function(){

   //alert("I like this");

});

$("#category").change(function(){
    //alert("value has changed") ;
    alert($('input[name=cat]:checked').val());
});