



  $(document).ready(function(){
    $('.tooltipped').tooltip();
  });
  $(document).ready(function(){
    $('.sidenav').sidenav();

    $('.collapsible').collapsible();
 	  $('.modal').modal();
	  $(".dropdown-trigger").dropdown().open();
    $('.tooltipped').tooltip();

  });




  // Initialize collapsible (uncomment the line below if you use the dropdown variation)
  //$('.collapsible').collapsible();


 $(document).ready(function(){
    $('select').select();
  });

function editProviderid(id){
  var listelem = document.getElementById('edit'+id);
  var inputTextelem = document.getElementById('edit-provider-name');
  inputTextelem.value = listelem.innerHTML;

}
