<html>
<title>fjslf</title>
</html>
<body>
<td>
    <input id='$idd' type='button' value='View PDF'class='btn btn-primary' onclick='viewPDF(this.id)' target='_blank' >
</td>
<div id="pdfResult"></div>

<script>
function viewPDF(id){
    $.ajax({  url: "viewCrf.php",
        data: {'idd' : id},
        type: "POST",
        success: function (data) {
            $("#pdfResult").html(data);
        }
    });
}
</script>
</body>
</html>