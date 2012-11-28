  <form id="newproject">
  <fieldset>
    <legend>New Project</legend>
<div id="newprojectcontent">

    <label>Name</label>
    <input type="text" id="name" placeholder="project name">
    <label>Category</label>
    <select id="projectcategory">
        <option value="standalone" class="selected">Standalone Application</option>
        <option value="web">Web Application</option>
    </select>
    <br><br>
    <label>Project File (Please upload a .zip file)</label>
    <input type="file" id="projectfile" placeholder="Choose a zip file">
    <br>
    <br>
    <label>Snapshots</label>
    <input type="file" id="snapshot1" placeholder="Choose a file">
    <input type="file" id="snapshot2" placeholder="Choose a file">
    <input type="file" id="snapshot3" placeholder="Choose a file">

    
    <br><br>
    <button class="btn btn-primary" id="uploadproject">Upload</button>



<div id="alertproject" class="alert" style="display:none;">

</div>
</div> <!-- End newusercontent div -->
  </fieldset>
</form>