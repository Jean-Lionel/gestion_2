<!-- <?php

//require_once('../config/calcule.php');

//$employes = get_FilesPaie($employes);

?>
-->

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>JSPDF</title>
	<!-- <script src="../js/jquery-3.4.1.min.js"> </script> -->
	<script src="../js/jspdf.min.js"></script>
	<script src="../js/jspdf.plugin.autotable.js"></script>
</head>
<body>

	<button onclick="generatePdf()">
		Generer un pdf
	</button>

    <table id="content">
        <thead>
            <tr>
                <th>Lionel</th>

                <th><h1>je suis un grand title</h1></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>je suis cool</td>
            </tr>
            <tr>
                <td>je suis cool</td>
            </tr>
            <tr>
                <td>je suis cool</td>
            </tr>
            <tr>
                <td>je suis cool</td>
            </tr>
            <tr>
                <td>je suis cool</td>
            </tr>
            <tr>
                <td>je suis cool</td>
            </tr>
            <tr>
                <td>je suis cool</td>
            </tr>
            <tr>
                <td>je suis cool</td>
            </tr>
            <tr>
                <td>je suis cool</td>
            </tr>
            <tr>
                <td>je suis cool</td>
            </tr>
            <tr>
                <td>je suis cool</td>
            </tr>
            <tr>
                <td>je suis cool</td>
            </tr>
            <tr>
                <td>je suis cool</td>
            </tr>
            <tr>
                <td>je suis cool</td>
            </tr> <tr>
                <td>je suis cool</td>
            </tr>
            <tr>
                <td>je suis cool</td>
            </tr>
            <tr>
                <td>je suis cool</td>
            </tr>
            <tr>
                <td>je suis cool</td>
            </tr>
            <tr>
                <td>je suis cool</td>
            </tr>
            <tr>
                <td>je suis cool</td>
            </tr>
            <tr>
                <td>je suis cool</td>
            </tr>
            <tr>
                <td>je suis cool</td>
            </tr>
            <tr>
                <td>je suis cool</td>
            </tr>
            <tr>
                <td>je suis cool</td>
            </tr>
            <tr>
                <td>je suis cool</td>
            </tr>
            <tr>
                <td>je suis cool</td>
            </tr>
            <tr>
                <td>je suis cool</td>
            </tr>
            <tr>
                <td>je suis cool</td>
            </tr>
            <tr>
                <td>je suis cool</td>
            </tr>
            <tr>
                <td>je suis cool</td>
            </tr>
            <tr>
                <td>je suis cool</td>
            </tr>
            <tr>
                <td>je suis cool</td>
            </tr>
            <tr>
                <td>je suis cool</td>
            </tr>
            <tr>
                <td>je suis cool</td>
            </tr>
            <tr>
                <td>je suis cool</td>
            </tr>
            <tr>
                <td>je suis cool</td>
            </tr>
            <tr>
                <td>je suis cool</td>
            </tr>
            <tr>
                <td>je suis cool</td>
            </tr>
            <tr>
                <td>je suis cool</td>
            </tr>
            <tr>
                <td>je suis cool</td>
            </tr>
            <tr>
                <td>je suis cool</td>
            </tr>
            <tr>
                <td>je suis cool</td>
            </tr>
            <tr>
                <td>je suis cool</td>
            </tr>
            <tr>
                <td>je suis cool</td>
            </tr>
            <tr>
                <td>je suis cool</td>
            </tr>
            <tr>
                <td>je suis cool</td>
            </tr>
            <tr>
                <td>je suis cool</td>
            </tr>
            <tr>
                <td>je suis cool</td>
            </tr>
            <tr>
                <td>je suis cool</td>
            </tr>
            <tr>
                <td>je suis cool</td>
            </tr>
            <tr>
                <td>je suis cool</td>
            </tr>
            <tr>
                <td>je suis cool</td>
            </tr>
            <tr>
                <td>je suis cool</td>
            </tr> <tr>
                <td>je suis cool</td>
            </tr>
            <tr>
                <td>je suis cool</td>
            </tr>
            <tr>
                <td>je suis cool</td>
            </tr>
            <tr>
                <td>je suis cool</td>
            </tr>
            <tr>
                <td>je suis cool</td>
            </tr>
            <tr>
                <td>je suis cool</td>
            </tr>
            <tr>
                <td>je suis cool</td>
            </tr>
            <tr>
                <td>je suis cool</td>
            </tr>
            <tr>
                <td>je suis cool</td>
            </tr>
            <tr>
                <td>je suis cool</td>
            </tr>
            <tr>
                <td>je suis cool</td>
            </tr>
            <tr>
                <td>je suis cool</td>
            </tr>
            <tr>
                <td>je suis cool</td>
            </tr>
            <tr>
                <td>je suis cool</td>
            </tr>
            <tr>
                <td>je suis cool</td>
            </tr>
            <tr>
                <td>je suis cool</td>
            </tr>
            <tr>
                <td>je suis cool</td>
            </tr>
            <tr>
                <td>je suis cool</td>
            </tr>
            <tr>
                <td>je suis cool</td>
            </tr>
            <tr>
                <td>je suis cool</td>
            </tr>
            <tr>
                <td>je suis cool</td>
            </tr>
            <tr>
                <td>je suis cool</td>
            </tr>
            <tr>
                <td>je suis cool</td>
            </tr>
            <tr>
                <td>je suis cool</td>
            </tr>
            <tr>
                <td>je suis cool</td>
            </tr>
            <tr>
                <td>je suis cool</td>
            </tr>
            <tr>
                <td>je suis cool</td>
            </tr>
            <tr>
                <td>je suis cool</td>
            </tr>
            <tr>
                <td>je suis cool</td>
            </tr>
            <tr>
                <td>je suis cool</td>
            </tr>
            <tr>
                <td>je suis cool</td>
            </tr>
            <tr>
                <td>je suis cool</td>
            </tr>
            <tr>
                <td>je suis cool</td>
            </tr>
            <tr>
                <td>je suis cool</td>
            </tr>
            <tr>
                <td>je suis cool</td>
            </tr>
            
        </tbody>
        
    </table>


    <script>
       function generatePdf(){
          let doc = new jsPDF('l');

          doc.setFontSize(8)

          doc.autoTable({
             html : '#content' 
         });
        doc.page=1; // use this as a counter.

        function footer(){ 
    doc.text(150,285, 'page ' + doc.page); //print number bottom right
    doc.page ++;
};
footer()

doc.save('test.pdf')
}

</script>
</body>
</html>