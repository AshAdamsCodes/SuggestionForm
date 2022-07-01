<!DOCTYPE html>
<html>
  <head>
  <head>
    <meta charset="utf-8">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <title>Share Feedback</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="./assets/css/style.css" rel="stylesheet">
    <link rel="stylesheet" media="screen" href="https://fontlibrary.org//face/glacial-indifference" type="text/css"/>

    <style>
      body {
        background-color: #f6f6f4;
        font-family: font-family: 'GlacialIndifferenceRegular';
        font-weight: normal;
        font-style: normal;
        text-align: center;
      }

      form {
        line-height: 27px;
      }

      h3, h2 {
        font-size: 25px;
      }


      input, textarea /*[type="text"], input[type="date"], input[type="time"], */ {
        min-height: 15px;
        border-radius: 5px;
        border:1px solid black;
        font-size: 13px;
        
        /*font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;*/
      }

      /*input[type="radio"] {
        margin-left: 12px;
      }*/

      #main {
        background-color: white;
        text-align: left;
        padding-left: 30px;
        height: 100vh;
        border-radius: 15px;
        margin: 2% 10%;
        overflow: auto;
      }

      #top {
        /*background-color: #b05ddf;*/
        margin: 2% 10%;
        border-radius: 15px;
      }

      #top img {
        display: block;
        width: 35%;
        margin: 0 auto;
        height: 200px; 
        width: 200px;
      }


      label{
          font-size: 18px;
      }

      input[type=submit]:hover {
        background-color: #5999a2;
        color: #f6f6f4;
      }

      input[type=text], select {
        width: 100%;
        /*padding: 10px 20px;*/
        /*margin: 8px 0;*/
        display: inline-block;
        border: 1px solid  #5999a2;
        border-radius: 4px;
        box-sizing: border-box;
        font-size: 15px;
      }

      input[type=text]:active{
        background-color: #5999a2;

}

      textarea{
        width: 100%;
        /*padding: 10px 20px;*/
        /*margin: 8px 0;*/
        display: inline-block;
        border: 1px solid #5999a2;
        border-radius: 4px;
        box-sizing: border-box;
        font-size: 14px;
      }

      select{
        padding-top: 5px;
        padding-bottom: 5px; 
       
      }

      label{
        font-weight: bold;
      }

    </style>
  </head>

  <body>
    <section id="top">
      <img src="assets/img/Drama Club Logo_Full_Teal@2x.png" alt="Drama Club Logo">
    </section>
    <section class="header">
        <h2>We value your feedback!</h2>
        <h3>We appreciate you taking the time to share your thoughts.</h3>
        <h3>What's your suggestion?</h3>
        <br>
    </section>



  <form method="post" action="read.php" >
    <label>First Name:<br>
      <input type="text" name="first">
    </label>
    <br>
    <br>
    <label>Last Name:<br>
      <input type="text" name="last">
    </label>
    <br>
    <br>
    <label>Email:<br>
      <input type="text" name="eml">
    <br>
    <br>
    <section class="class">
      <label for="class">Class</label>
      <br>
        <select name="class" id="class">
          <option value="improvisation">Improvisation</option>
          <option value="acting">Acting</option>
          <option value="playwrighting">Playwrighting</option>
        </select>
    </section>
    <br>
    <section class="suggestion">
        <label for="suggestion">Please share as much detail as possible</label>
        <br>
          <textarea id="suggestion" name="suggestion" rows="3" cols="40">Your suggestion here. . . </textarea>
    </section>
    <br>
    <input type="submit" value="Make a Suggestion">
  </form>
</body>
</html>
