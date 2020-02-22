<?php
$email_template = <<<XML ?>
<table width="100%" bgcolor="#eb5f06"  cellpadding="0" cellspacing="0" border="0" >
<tr>
    <td bgcolor="#efefef" ><img src="https://www.rsvpcaribbean.com/tools/newsletter/images/email_header.png"/></td>
</tr>
<tr>
    <td style="border-top:solid 3px #000000;">
        <table width="100%"  cellpadding="50" border="0">
        <tr>
            <td align="center" >
                <table width="600" bgcolor="#FFFFFF" cellpadding="0" cellspacing="20" style="border:solid 2px #000000;">
                    <tr>
                        <td>__CONTENT_AREA__</td>
                    </tr>
                </table>
            </td>
        </tr>
        </table>
    </td>
</tr>
<tr>
	<td>
        <table width="100%"  cellpadding="50" border="0">
            <tr>
                <td bgcolor="#bebebe" align="center" >
                    Please do not reply to this email. Emails sent to this address will not be answered.<br>
                    Copyright &copy; 2016 <a href="https://www.rsvpcaribbean.com"><font color="#0000FF">www.rsvpcaribbean.com</font></a>. All rights reserved.
                </td>
             </tr>
         </table>
    </td>
</tr>
</table>
<?php //XML;
?>