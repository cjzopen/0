<%@ codepage=65001 %>
<%
	response.charset = "UTF-8"

	ip = GetUserIP
	dlTime = GetPkiTime

	Dim dbname, conn, sql
	dbname = "../../aresoa/pki/promote/db/uPKIKEY.mdb"
	Set conn = Server.CreateObject("ADODB.Connection")
	conn.Open "Driver={Microsoft Access Driver (*.mdb)};DBQ=" & Server.MapPath(dbname)

	sql = "insert into DLLog(ip, when) values('" & ip & "','" & dlTime & "')"
	conn.execute(sql)

	conn.close
	set conn = nothing

	response.redirect "../download/ARES_uPKI_KEY_MultiLingual_Setup.exe"

	'-------------------------------------------
	' 函數名稱: GetUserIP()
	' 功能: 取得Client端的ip address
	'-------------------------------------------
	function GetUserIP()
		'先檢查proxy內的IP
		GetUserIP = Request.ServerVariables("HTTP_X_FORWARDED_FOR")

		'如果是空的，取得client端IP
		If GetUserIP = "" Then
			GetUserIP = Request.ServerVariables("REMOTE_ADDR")
		end if
	end function

	'-------------------------------------------
	' 函數名稱: GetPkiTime
	' 功能: 取得目前時間(14碼)
	'-------------------------------------------
	Function GetPkiTime()
		y = Year(now)
		if Len(Month(now)) < 2 then
			m = "0" & Month(now)
		else
			m = Month(now)
		end if
		if Len(Day(now)) < 2 then
			d = "0" & Day(now)
		else
			d = Day(now)
		end if
		if Len(Hour(now)) < 2 then
			h = "0" & Hour(now)
		else
			h = Hour(now)
		end if
		if Len(Minute(now)) < 2 then
			min = "0" & Minute(now)
		else
			min = Minute(now)
		end if
		if Len(Second(now)) < 2 then
			s = "0" & Second(now)
		else
			s = Second(now)
		end if
		GetPkiTime = y & m & d & h & min & s
	End Function

%>
