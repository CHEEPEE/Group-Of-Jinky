
/*  var elem = document.querySelector('.collapsible');
  var instance = new M.Collapsible(elem, options);*/

  // Or with jQuery

  $(document).ready(function(){
    $('.collapsible').collapsible();
  });

 $(document).ready(function(){
    $('.tabs').tabs();
  });

 $(document).ready(function(){
    $('.datepicker').datepicker();
  });
       
 $(document).ready(function(){
    $('.timepicker').timepicker();
  });

  var ETDCourse = ["Civil Engineering","Computer Engineering","Infomation Technology"];
  var BEdCourses = ["Business Administration","Hospitality Management","Accountancy"];
  var LAEDCourses = ["Elementary Education","Secondary Education","Philosophy"];
  var CJEDCourses = ["Criminology"];
  var NursingCourses = ["Nursing"];
  var courses = ETDCourse;

  function selectCourse(Department){
      if ( Department == "ETD") {
          courses = ETDCourse;
      }
      if (Department == "BED") {
          courses = BEdCourses;
      }

      if (Department == "LAED") {
          courses = LAEDCourses;
      }
      if (Department == "CJED") {
          courses = CJEDCourses;
      }
      if (Department == "NURSING") {
          courses = NursingCourses;
      }
    var courseString ="";
         for (var i = 0; i < courses.length; i++) 
         {
              courseString += "<p><label> <input name='Course' type='radio' onclick = 'selectYearLevel(&#39;"+courses[i]+"&#39;);' /> <span>"+courses[i]+"</span> </label> </p>";
         }
         var parent = document.getElementById("courses").innerHTML = courseString;
    }
   
    var yearLevels = 4;
    var StringYearLevels = ["1st","2nd","3rd","4th","5th"];

    function selectYearLevel(course){
      if (course== ETDCourse[0]) 
      {
        yearLevels = 5;
      }else if (course == ETDCourse[1]) 
      {
        yearLevels = 5;
      }else{
        yearLevels =4;
      }
      var YearLevelString ="";
      for (var i = 0; i < yearLevels; i++) 
      {
              YearLevelString += "<p><label> <input name='YearLevel' type='radio' /> <span>"+StringYearLevels[i]+" Year"+"</span> </label> </p>";
      }
    var parent = document.getElementById("yearLevels").innerHTML = YearLevelString;
    }

     


       
