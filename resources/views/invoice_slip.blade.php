<center><h3>Tax Invoice</h3><center>
<table width=90% height=30% border=1>
   <tr>
       <td width=50% rowspan=3>
           <strong> doc.company or "" </strong><br>
            frappe.db.get_value("Company", doc.company, "registration_details") or "" 
       </td>
       <td width=25%>
           Invoice No.<br>
           <b> doc.name </b>
       </td>
       <td width=25%>
           Dated<br>
	   <b> frappe.utils.formatdate(doc.posting_date) </b>
       </td>
   </tr>
   <tr>
       <td width=25%>
           Delivery Note<br>
	   <b>&nbsp;</b>
       </td>
       <td width=25%>
           Mode/Terms of Payment<br>
	   <b>&nbsp;</b>
       </td>
   </tr>
   <tr>
       <td width=25%>
           Supplier's Ref.<br>
	   <b>&nbsp;</b>
       </td>
       <td width=25%>
           Other Reference(s)<br>
	   <b>&nbsp;</b>
       </td>
   </tr>
   <tr>
       <td width=50% rowspan=4>
           <i>Customer</i><br>
           <strong> doc.customer_name or "" </strong><br>
	    doc.address_display or "" 
       </td>
       <td width=25%>
           Buyer's Order No.<br>
	   <b>&nbsp;</b>
       </td>
       <td width=25%>
           Dated<br>
	   <b>&nbsp;</b>
       </td>
   </tr>
   <tr>
       <td width=25%>
           Despatch Document No.<br>
	   <b>&nbsp;</b>
       </td>
       <td width=25%>
           Dated<br>
	   <b>&nbsp;</b>
       </td>
   </tr>
   <tr>
       <td width=25%>
           Despatched through<br>
	   <b>&nbsp;</b>
       </td>
       <td width=25%>
           Destination<br>
	   <b>&nbsp;</b>
       </td>
   </tr>
   <tr>
       <td width=25% height=100 colspan=2>
           Terms of Delivery<br>
	   <b>&nbsp;</b>
       </td>
   </tr>
</table>
<TABLE cellpadding=0 cellspacing=0 width=90% border=1>
<TR>
	<TH WIDTH=1%>Sl</TD>
	<TH>Particulars</TD>
	<TH WIDTH=3%>QTY</TD>
	<TH WIDTH=20%>Rate</TD>
	<TH WIDTH=20%>VAT</TD>
	<TH WIDTH=20%>Amount</TD>
</TR>

{% for item in doc.items %}
{% set remrows = 10 - loop.revindex %}
<TR>
	<TD> loop.index </TD>
	<TD> item.item_name </TD>
	<TD align=center> item.get_formatted("qty", 0) </TD>
	<TD align=right> item.get_formatted("rate", doc) </TD>
	<td align=center>
		{% set mydict = json.loads(item.item_tax_rate) %}
		{% if item.item_tax_rate == "{}" %}
			{% for row in doc.taxes %}
				 row.rate .0%
			{% endfor %}
		{% else %}
			{% for key, value in mydict.items() %}
				 value %
			{% endfor %}
		{% endif %}


        </td>
	<TD align=right> item.get_formatted("amount", doc) </TD>
</TR>
{% set trate = "" %}
{% endfor %}

<!-- {% set loop = 10 - doc.items|length  %}
{% for i in range(loop) %}
<TR>
	<TD>&nbsp;</TD>
	<TD>&nbsp;</TD>
	<TD>&nbsp;</TD>
	<TD>&nbsp;</TD>
	<TD>&nbsp;</TD>
</TR>
{% endfor %} -->
</TABLE>

<TABLE cellpadding=0 cellspacing=0 width=90% border=1>
<TR>
        <TD rowspan=3 >
            Amount in Words<br>
            <B> doc.in_words </B><br><br>
            <B> doc.base_in_words </B>
        </TD>
	<TD WIDTH=13% align=right><B>SUB TOTAL</B></TD>
        <TD WIDTH=20% align=right><B> doc.get_formatted("base_total", doc) </B></TD>
	<TD WIDTH=20% align=right><B> doc.get_formatted("total", doc) </B></TD>
</TR>
<TR>
	<TD align=right><B>VAT</B></TD>
        <TD WIDTH=20% align=right><B> doc.get_formatted("base_total_taxes_and_charges", doc) </B></TD>
	<TD WIDTH=20% align=right><B> doc.get_formatted("total_taxes_and_charges", doc) </B></TD>
	
</TR>
<TR>
	<TD align=right><B>TOTAL</B></TD>
	<TD WIDTH=20% align=right><B> doc.get_formatted("base_grand_total", doc) </B></TD>
	<TD WIDTH=20% align=right><B> doc.get_formatted("grand_total", doc) </B></TD>
</TR>
<TR>
	<TD colspan=2 height=120> doc.remarks </B></TD>
	<TD align=right colspan=3>
            <B>for  doc.company </B>
            <div style="position: relative; height: 100px; border: solid; border-style: none;">
               <div style="position: absolute; height: 10px; border: solid; bottom: 0; right: 0;  left: 0; border-style: none;">
                  Authorised Signatory
               </div>
            </div>
        </TD>
</TR>
</TABLE>
