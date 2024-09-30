<%@ codepage=65001 %>
<html>
<head>
<meta HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=UTF-8">
<title>FileCipherTool</title>
<style type="text/css">
	body,table {
		color: black;
		font-family: verdana;
		font-size: 10px;
		border: solid 1px;
	}
	td {
		height: 40px;
		border: solid 1px;
	}
	.trHeader {
		background-color: #3F689A;
		color: white;
	}
	.row1 {
		background-color: #EEF3F9;
		color: black;
	}
	.row2 {
		background-color: #ffffff;
		color: black;
	}
	.focusRow {
		background-color: #8299BB;
		color: white;
	}
</style>
</head>

<body>
<%
	response.charset = "UTF-8"

	Dim tablename, conn, sql
	tablename = "db/data.mdb"
	Set conn = Server.CreateObject("ADODB.Connection") 
	conn.Open "Driver={Microsoft Access Driver (*.mdb)};DBQ=" & Server.MapPath(tablename) 

	sql = "select * from Click"
	set rs = conn.execute(sql)
	if not rs.eof then
		dataArray = rs.GetRows
		response.write "uPKI Key 註冊資料，<b>2008/4/10 PM 6:00</b> 止，總筆數: <b>" & UBound(dataArray, 2) + 1 & "</b><br><br>"
		response.write "<table cellpadding='5' cellspacing='1' width=''>"
		response.write "<tr class='trHeader'>"
		response.write "<td>&nbsp;</td>"
		response.write "<td>IP</td>"
		response.write "<td>來源</td>"
		response.write "</tr>"
		for i = LBound(dataArray, 2) to UBound(dataArray, 2)
			if i MOD 2 = 1 then
				trClass = "row1"
			else
				trClass = "row2"
			end if
			ip = dataArray(1, i)
			src = dataArray(2, i)
			if src = "" then
				src = "&nbsp;"
			end if
			if trClass = "row1" then
				response.write "<tr class=""" & trClass & """ onmouseover=""this.className='focusRow'"" onmouseout=""this.className='row1'"">"
			else
				response.write "<tr class=""" & trClass & """ onmouseover=""this.className='focusRow'"" onmouseout=""this.className='row2'"">"
			end if
			response.write "<td>" & i + 1 & "</td>"
			response.write "<td>" & ip & "</td>"
			response.write "<td>" & src & "</td>"
			response.write "</tr>"
		next
		response.write "</table>"
	else
		response.write "目前沒有任何資料存在"
	end if

	rs.close
	set rs = nothing
	conn.close
	set conn = nothing
%>
</body>
</html>