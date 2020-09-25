<xsl:stylesheet version="1.0"
	xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
	<xsl:template match="/">
		<html>
			<body>
				<h2>Employee Information</h2>
				<table border="1">
					<tr bgcolor="#9acd32">
						<th>id</th>
						<th>firstname</th>
						<th>lastName</th>
						<th>photo</th>
					</tr>
					<xsl:for-each select="employees/employee">
						<tr>
							<td>
								<xsl:value-of select="id"/>
							</td>
							<td>
								<xsl:value-of select="firstName"/>
							</td>
							<td>
								<xsl:value-of select="lastName"/>
							</td>
							<td>
								<xsl:value-of select="photo"/>
							</td>
						</tr>
					</xsl:for-each>
				</table>
			</body>
		</html>
	</xsl:template>
</xsl:stylesheet>