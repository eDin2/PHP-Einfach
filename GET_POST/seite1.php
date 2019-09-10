<form action="seite2.php" method="post">
Vorname: <input type="text" name="vorname" /><br />
Namename: <input type="text" name="nachname" /><br />
<input type="Submit" value="Absenden" />
</form>

<!-- $_POST oder $_GET?
Wann benutzt man POST und wann GET? Die Frage ist leicht zu beantworten. Wenn man Eingaben aus einem Formular übergeben möchte, so sollte man immer POST benutzen.
Warum ?
Mit GET werden die Eingaben der URL angehängt, dadurch ist die Textlänge eingeschränkt, außerdem kann jeder im Browser-Verlauf an der URL erkennen, was als Daten übermittelt wurde, und bei einer Passworteingabe ist das nicht so schön. -->