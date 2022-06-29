<!DOCTYPE html>
<html>
<body>
    <h1>LOGO</h1>
    <section class="header">
        <h2>We value your feedback!</h2>
        <h3>We appreciate you taking the time to share your thoughts.</h3>
        <h3>What's your suggestion?</h3>
    </section>



  <form method="post" action="read.php">
    <label>First Name:<br>
      <input type="text" name="first">
    </label>
    <br>
    <label>Last Name:<br>
      <input type="text" name="last">
    </label>
    <br>
    <label>Email:<br>
      <input type="text" name="eml">
    <br>
    <br>
    <section class="class">
      <label for="class">Class</label>
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
        <br>
          <textarea id="suggestion" name="suggestion" rows="3" cols="40">Your suggestion here. . . </textarea>
    </section>
    <br>
    <input type="submit" value="Make a Suggestion">
  </form>
</body>
</html>
