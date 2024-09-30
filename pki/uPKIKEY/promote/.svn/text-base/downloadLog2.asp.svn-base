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
<title>ARES uPKI KEY</title>
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
		border: solid 1px #c0c0c0;
	}
	table.noborder {
		color: black;
		font-family: verdana;
		font-size: 10px;
		border: none;
	}
	td {
		height: 30px;
		border: solid 1px #c0c0c0;
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
	tablename = "db/uPKIKEY.mdb"
	Set conn = Server.CreateObject("ADODB.Connection") 
	conn.Open "Driver={Microsoft Access Driver (*.mdb)};DBQ=" & Server.MapPath(tablename) 

	if sortby <> "" then
		select case sortby
			case "ip":
				sql = "select * from DLLog order by ip"
			case "when":
				sql = "select * from DLLog order by when DESC"
			case else:
				sql = "select * from DLLog order by id DESC"
		end select
	else
		sql = "select * from DLLog order by id DESC"
	end if
	set rs = conn.execute(sql)
	if not rs.eof then
		dataArray = rs.GetRows
		response.write "Welcome <b>" & loginName & "</b>, ARES uPKI KEY 體驗版下載筆數: <b>" & UBound(dataArray, 2) + 1 & "</b><br><br>"
		response.write "<div style='float:left;'>"
		response.write "<table cellpadding='5' cellspacing='1'>"
		response.write "<tr class='trHeader'>"
		response.write "<td>&nbsp;</td>"
		response.write "<td><a href='downloadLog.asp?sortby=ip'>來源 IP</a></td>"
		response.write "<td><a href='downloadLog.asp?sortby=when'>下載時間</a></td>"
		response.write "</tr>"
		for i = LBound(dataArray, 2) to UBound(dataArray, 2)
			if i MOD 2 = 1 then
				trClass = "row1"
			else
				trClass = "row2"
			end if
			ip = dataArray(1, i)
			when = dataArray(2, i)
			if when = "" then
				when = "&nbsp;"
			else
				when = DateFormat_PKI(when, 2)
			end if
			if trClass = "row1" then
				response.write "<tr class=""" & trClass & """ onmouseover=""this.className='focusRow'"" onmouseout=""this.className='row1'"">"
			else
				response.write "<tr class=""" & trClass & """ onmouseover=""this.className='focusRow'"" onmouseout=""this.className='row2'"">"
			end if
			response.write "<td>" & i + 1 & "</td>"
			response.write "<td>" & ip & "</td>"
			response.write "<td>" & when & "</td>"
			response.write "</tr>"
		next
		response.write "</table>"
	else
		response.write "目前沒有任何資料存在"
	end if


	'-------------------------------------------
	' 函數名稱: DateFormat_PKI
	' 功能: 將14位數字的日期轉為日期格式
	'	參數:	sDate: 14位數的日期
	'				iType - 1: 2004/10/10
	'				iType - 2: 2004/10/10 15:45:30
	'	範例:	DateFormat_PKI("20041225083020", 1)
	'-------------------------------------------
	function DateFormat_PKI(sDate, iType)
		if iType = 1 then
			DateFormat_PKI = MID(sDate, 1, 4) & "/" & MID(sDate, 5, 2) & "/" & MID(sDate, 7, 2)
		elseif iType = 2 then
			DateFormat_PKI = MID(sDate, 1, 4) & "/" & MID(sDate, 5, 2) & "/" & MID(sDate, 7, 2) & " " & MID(sDate, 9, 2) & ":" & MID(sDate, 11, 2) & ":" & MID(sDate, 13)
		end if
	end function

	'-------------------------------------------
	' 函數名稱: GetPkiTime
	' 功能: 取得目前時間(14碼)
	'-------------------------------------------
	Function GetPkiTime2Mon()
		y = Year(now)
		if Len(Month(now)) < 2 then
			m = "0" & Month(now)
		else
			m = Month(now)
		end if
		GetPkiTime2Mon = y & m
	End Function

%>
</div>


<%
	Select Case Month(Now)
		case 1,3,5,7,8,10,12:
			days = "31"
		case 2:
			days = "28"
		case else:
			days = "30"
	end select

	heightBase = 5
%>
<div style="position:relative; float:left; padding-left:10px;">
本月(<%=Month(Now)%>月)下載統計
<table cellpadding="0" cellspacing="2" border="1" class="noborder" style="height:250px;">
	<tr>
		<% for i = 1 to days %>
		<td width="17" valign="bottom" align="center">
			<%
				if i > CInt(Day(now)) then
			%>
				<img src="icon_11x3.gif" border="0" width="11" height="0" style="visibility:hidden;"/>
			<%
				else
					if i < 10 then
						d = "0" & i
					else
						d = CStr(i)
					end if

					startDate = GetPkiTime2Mon & d & "000000"
					endDate = GetPkiTime2Mon & d & "999999"
					sql = "select count(*) from DLLog where (when>'" & startDate & "') and (when<'" & endDate & "')"
					set rs = conn.execute(sql)
					if not rs.eof then
						dCount = CInt(rs(0))
					else
						dCount = 0
					end if
					height = heightBase * dCount
					if height = 0 then
			%>
			<img src="icon_11x3.gif" border="0" width="11" height="<%=height%>" style="visibility:hidden;"/>
			<%
					else
			%>
			<%=dCount%><br/>
			<img src="icon_11x3.gif" border="0" width="11" height="<%=height%>"/>
			<%
					end if
				end if
			%>
		</td>
		<% next %>
	</tr>
	<tr>
		<% for i = 1 to days %>
		<td width="17" valign="top" align="center" style="border:none;">
			<%=i%>
		</td>
		<% next %>
	</tr>
</table>
</div>

<%
	rs.close
	set rs = nothing
	conn.close
	set conn = nothing
%>
</body>
</html>