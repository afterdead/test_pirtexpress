<!DOCTYPE html>
<html lang="en-US">
<head>
<title>TEST</title>
<meta charset="utf-8">
<style>
table{
  margin-left:auto;
  margin-right:auto;
}
.responstable {
  margin: 1em 0;
  width: 100%;
  overflow: hidden;
  background: #FFF;
  color: #024457;
  border-radius: 10px;
  border: 1px solid #167F92;
}
.responstable tr {
  border: 1px solid #D9E4E6;
}
.responstable tr:nth-child(odd) {
  background-color: #EAF3F3;
}
.responstable th {
  display: none;
  border: 1px solid #FFF;
  background-color: #167F92;
  color: #FFF;
  padding: 1em;
}
.responstable th:first-child {
  display: table-cell;
  text-align: center;
}
.responstable th:nth-child(2) {
  display: table-cell;
}
.responstable th:nth-child(2) span {
  display: none;
}
.responstable th:nth-child(2):after {
  content: attr(data-th);
}
@media (min-width: 480px) {
  .responstable th:nth-child(2) span {
    display: block;
  }
  .responstable th:nth-child(2):after {
    display: none;
  }
}
.responstable td {
  display: block;
  word-wrap: break-word;
  max-width: 7em;
}
.responstable td:first-child {
  display: table-cell;
  text-align: center;
  border-right: 1px solid #D9E4E6;
}
@media (min-width: 480px) {
  .responstable td {
    border: 1px solid #D9E4E6;
  }
}
.responstable th, .responstable td {
  text-align: left;
  margin: .5em 1em;
}
@media (min-width: 480px) {
  .responstable th, .responstable td {
    display: table-cell;
    padding: 1em;
  }
}

body {
  padding: 0 2em;
  font-family: Arial, sans-serif;
  color: #024457;
  background: #f2f2f2;
}

h1 {
  font-family: Verdana;
  font-weight: normal;
  color: #024457;
}
h1 span {
  color: #167F92;
}

</style>
</body>
  <form action="#" id="form_add">
    Fullname : <input type="text" name="fullname" required placeholder="Your fullname pls." />
    Age : <input type="number" name="age" placeholder="your age pls." required />
    Gender : <select name="sex"  required>
      <option></option>
      <option value="f">Female</option>
      <option value="m">Male</option>
    </select>
    Salary :  <input type="number" placeholder="your salary pls." name="salary" required />

    <button>Save</button>
  </form>
  <br/>

  <center>
    <button class="all" style="display:none">Show All</button>
    <button class="filter">Filter Age Between 30-40, Salary > 40,000</button>

  </center>
</br/>
  <div id="show"></div>
</body>
<script
  src="https://code.jquery.com/jquery-3.2.1.min.js"
  integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
  crossorigin="anonymous"></script>
  <script>
  $(function(){
    $('.all').click()
  })
  //show all
  $('.all').click(function(){
      $('#show').load('ajax_all.php')
      $(this).hide().next().show()
  })
  //show fill
  $('.filter').click(function(){
    $('#show').load('ajax_filter.php')
    $(this).hide().prev().show()

  })
  //add
  $('#form_add').submit(function(){
    var data = $(this).serialize();
    $.ajax({
       type:"GET",
       cache:false,
       url:"ajax_add.php",
       data:data,
       success: function (resp) {
         var obj = $.parseJSON(resp)
         
           $('#show').load('ajax_all.php')
           if(obj.pass){
             $('#form_add')[0].reset()
           }
           $.each(obj.msg ,function(k,v){
             console.log(v)
           })
       }
     })

    return false;
  })
  </script>
</html>
