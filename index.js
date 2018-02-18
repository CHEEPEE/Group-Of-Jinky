

$('.carousel.carousel-slider').carousel({
   fullWidth: true,
   indicators: true
 });
  $(document).ready(function(){
    $('.tabs').tabs();
  });


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

   $(document).ready(function(){
      $('.scrollspy').scrollSpy();
    });


function editProviderid(id){
  var listelem = document.getElementById('edit'+id);
  var inputTextelem = document.getElementById('edit-provider-name');
  document.getElementById('edit-form').action = 'scholar-provider-update.php?q='+id;
  inputTextelem.value = listelem.innerHTML;

}
function editSchool(id){
  var listelem = document.getElementById('edit'+id);
  var inputTextelem = document.getElementById('edit-school-name');
  document.getElementById('school-name-edit-form').action = 'update-school.php?q='+id;
  inputTextelem.value = listelem.innerHTML;

}

function editSubAdmin(id) {
//  var schoolnameEscape = escape(schoolname);
  var listelem = document.getElementById('subadmin'+id);
  var schoolName = document.getElementById('schooladmin'+id);
//  document.getElementById('selectdefaultprovider').innerHTML = schoolName.innerHTML;
 console.log(schoolName.innerHTML);
  var inputTextelem = document.getElementById('update-username');
  document.getElementById('edit-sub-admin-form').action = 'update-sub-admin.php?q='+id;
  inputTextelem.value = listelem.innerHTML;


}
function editSchoolYearSem(id) {
  var listelem = document.getElementById('yearsem'+id);
//  document.getElementById('selectdefaultprovider').innerHTML = schoolName.innerHTML;
  var inputTextelem = document.getElementById('yearsem');
  document.getElementById('yearsem-name-edit-form').action = 'update-yearsem.php?q='+id;
  inputTextelem.value = listelem.innerHTML;
}
function setYearsem(id){
alert(""+id);
window.location.href = "admin-scholar.php?q=&sys="+id;
}
