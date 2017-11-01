


<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0"
xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
<xsl:template match="/">
  <html>
  <body style="background: url('uploads/whi.jpg');background-repeat: no-repeat;background-size:cover;">
    
    <h2 align="center">Contributors</h2>
<h4 align="center">Project Guide- Ms. Snehal Mumbaikar </h4>
    <table border="0" align="center">
      <tr bgcolor="#5acu32">
        <th>Name</th>
        <th>Roll number</th>
        <th> Serial number</th>
      </tr>
      <tr>
        <td><xsl:value-of select="contri/cd/name"/></td>
        <td><xsl:value-of select="contri/cd/roll_no"/></td>
        <td><xsl:value-of select="contri/cd/ser"/></td>
      </tr>
<tr>
        <td><xsl:value-of select="contri/cd1/name"/></td>
        <td><xsl:value-of select="contri/cd1/roll_no"/></td>
        <td><xsl:value-of select="contri/cd1/ser"/></td>
      </tr>
<tr>
        <td><xsl:value-of select="contri/cd2/name"/></td>
        <td><xsl:value-of select="contri/cd2/roll_no"/></td>
        <td><xsl:value-of select="contri/cd2/ser"/></td>
      </tr>

    
    </table>




  </body>
  </html>
</xsl:template>
</xsl:stylesheet>
