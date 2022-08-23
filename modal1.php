<link rel="stylesheet" href="./css/modal1.css">


<div id="myModal" class="modal">

  <div class="modal-content">
    <span class="close">&times;</span>
    <b>Upload file</b><br><br>
    <p>lorem ipsum lorem ipsum</p>
    <div class="tabs">
        <div class="tab">
            <input type="radio" id="tab-1" name="tab-group-1" checked>
            <label for="tab-1">Documents</label>
            
            <div class="content">
                <div class="select-doc">
                    <select>
                        <option value="hidden">Type of Document</option>
                        <option> 10th class result</option>
                        <option> 12th class result</option>
                        <option> Degree </option>
                        <option> Post Graduation Certificate</option>
                    </select>
                </div>
                <div class="upload">
                    <img src="img/Icon metro-upload.png">
                    <p>Drag and drop a document and watch me go!</p>
                    <p>OR</p>
                    <button class="fileupload">UPLOAD</button>
                </div>
            </div> 
        </div>
         
        <div class=" tab tab1">
            <input type="radio" id="tab-2" name="tab-group-1">
            <label for="tab-2">Task files</label>
            
            <div class="content">
                <div class="upload">
                    <img src="img/Icon metro-upload.png">
                    <p>Drag and drop a document and watch me go!</p>
                    <p>OR</p>
                    <button class="fileupload">UPLOAD</button>
                </div>
            </div> 
        </div>
         
   </div>
</div>
</div>

</body>

<script src="./js/modal1.js"></script>
<script>
    
document.getElementById("tab-1").click();
</script>
</html>