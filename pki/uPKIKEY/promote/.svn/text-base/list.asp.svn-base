<%@ codepage=65001 %>

<%
	Dim loginName
	loginName = Request.ServerVariables("Remote_User")
	loginName = mid(loginName,instr(1,loginName,"\")+1)

	sortby = request.queryString("sortby")
%>
<html>
<head>
<meta HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=UTF-8">
<title>FileCipherTool</title>
<style type="text/css">
	body {
		color: black;
		font-family: verdana;
		font-size: 10px;
	}
	table {
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
	a {
		color: yellow;
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

	if sortby <> "" then
		select case sortby
			case "name":
				sql = "select * from UserData order by name"
			case "company":
				sql = "select * from UserData order by company"
			case "country":
				sql = "select * from UserData order by country"
			case "everused":
				sql = "select * from UserData order by ever_used"
			case "interested":
				sql = "select * from UserData order by interested"
			case "signuptime":
				sql = "select * from UserData order by signuptime"
			case else:
				sql = "select * from UserData order by name"
		end select
	else
		sql = "select * from UserData"
	end if
	set rs = conn.execute(sql)
	if not rs.eof then
		dataArray = rs.GetRows
		response.write "Welcome <b>" & loginName & "</b>, ARES uPKI KEY 註冊資料，總筆數: <b>" & UBound(dataArray, 2) + 1 & "</b><br><br>"
		response.write "<table cellpadding='5' cellspacing='1' width='1500'>"
		response.write "<tr class='trHeader'>"
		response.write "<td>&nbsp;</td>"
		response.write "<td><a href='list.asp?sortby=name'>姓名</a></td>"
		response.write "<td><a href='list.asp?sortby=company'>公司</a></td>"
		response.write "<td><a href='list.asp?sortby=country'>國家</a></td>"
		response.write "<td>Email</td>"
		response.write "<td width='50'>行業別</td>"
		response.write "<td><a href='list.asp?sortby=everused'>使用過文件加解密</a></td>"
		response.write "<td><a href='list.asp?sortby=interested'>對文件保全有興趣</a></td>"
		response.write "<td width='100'>採購考量</td>"
		response.write "<td>採購考量(其它)</td>"
		response.write "<td>推薦1</td>"
		response.write "<td>推薦2</td>"
		response.write "<td>建議</td>"
		response.write "<td>從何得知</td>"
		response.write "<td>從何得知(其它)</td>"
		response.write "<td><a href='list.asp?sortby=signuptime'>時間</a></td>"
		response.write "<td>ID</td>"
		response.write "<td>版本</td>"
		response.write "</tr>"
		for i = LBound(dataArray, 2) to UBound(dataArray, 2)
			if i MOD 2 = 1 then
				trClass = "row1"
			else
				trClass = "row2"
			end if
			name = dataArray(1, i)
			company = dataArray(2, i)
			if company = "" then
				company = "&nbsp;"
			end if
			country = dataArray(3, i)
			if country = "" then
				country = "&nbsp;"
			end if
			email = dataArray(4, i)
			if email = "" then
				email = "&nbsp;"
			end if
			industry = dataArray(5, i)
			select case industry
				case ""
					industry = "&nbsp;"
				case "Electronics"
					industry = "電子業"
				case "Manufacturing"
					industry = "製造業"
				case "Software"
					industry = "軟體業"
				case "Service"
					industry = "服務業"
				case "Banking"
					industry = "金融業"
				case "Media"
					industry = "媒體公關"
				case "Government"
					industry = "政府機構"
				case "Medical"
					industry = "醫療單位"
				case "Traditional"
					industry = "傳統產業"
				case "Others"
					industry = "其它"
			end select
			ever_used = dataArray(6, i)
			if ever_used = "" then
				ever_used = "&nbsp;"
			end if
			interested = dataArray(7, i)
			if interested = "" then
				interested = "&nbsp;"
			end if
			consideration = dataArray(8, i)
			if consideration = "" then
				consideration = "&nbsp;"
			else
				consideration = Replace(consideration, "Price", "價格高低")
				consideration = Replace(consideration, "Support", "提供之技術支援服務")
				consideration = Replace(consideration, "Stability", "軟體穏定性")
				consideration = Replace(consideration, "Easiness", "操作簡單與否")
				consideration = Replace(consideration, "Others", "其它")
			end if
			consideration_other = dataArray(9, i)
			if consideration_other = "" then
				consideration_other = "&nbsp;"
			end if
			email2 = dataArray(10, i)
			if email2 = "" then
				email2 = "&nbsp;"
			end if
			email3 = dataArray(11, i)
			if email3 = "" then
				email3 = "&nbsp;"
			end if
			suggestion = dataArray(12, i)
			if suggestion = "" then
				suggestion = "&nbsp;"
			end if
			learn = dataArray(13, i)
			if learn = "" then
				learn = "&nbsp;"
			else
				learn = Replace(learn, "Internet", "網路")
				learn = Replace(learn, "Magazine", "雜誌")
				learn = Replace(learn, "Advertisement", "廣告")
				learn = Replace(learn, "Client", "客戶")
				learn = Replace(learn, "Friend", "親友")
				learn = Replace(learn, "Others", "其它")
			end if
			learn_other = dataArray(14, i)
			if learn_other = "" then
				learn_other = "&nbsp;"
			end if
			signuptime = dataArray(15, i)
			if signuptime = "" then
				signuptime = "&nbsp;"
			end if
			uniqueid = dataArray(16, i)
			if uniqueid = "" then
				uniqueid = "&nbsp;"
			end if
			version = dataArray(17, i)
			if version = "" then
				version = "&nbsp;"
			end if
			if trClass = "row1" then
				response.write "<tr class=""" & trClass & """ onmouseover=""this.className='focusRow'"" onmouseout=""this.className='row1'"">"
			else
				response.write "<tr class=""" & trClass & """ onmouseover=""this.className='focusRow'"" onmouseout=""this.className='row2'"">"
			end if
			response.write "<td>" & i + 1 & "</td>"
			response.write "<td>" & name & "</td>"
			response.write "<td>" & company & "</td>"
			response.write "<td>" & country & "</td>"
			response.write "<td>" & email & "</td>"
			response.write "<td>" & industry & "</td>"
			response.write "<td>" & ever_used & "</td>"
			response.write "<td>" & interested & "</td>"
			response.write "<td>" & consideration & "</td>"
			response.write "<td>" & consideration_other & "</td>"
			response.write "<td>" & email2 & "</td>"
			response.write "<td>" & email3 & "</td>"
			response.write "<td>" & suggestion & "</td>"
			response.write "<td>" & learn & "</td>"
			response.write "<td>" & learn_other & "</td>"
			response.write "<td>" & signuptime & "</td>"
			response.write "<td>" & uniqueid & "</td>"
			response.write "<td>" & version & "</td>"
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