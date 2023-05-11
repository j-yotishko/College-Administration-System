var uploadField = document.getElementById("img");

uploadField.onchange = function() {
    if(this.files[0].size > 5242880){
       alert("File is too big!");
       this.value = "";
    };
};