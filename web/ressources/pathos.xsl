<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform" 
                xmlns:xs='http://www.w3.org/2001/XMLSchema'
                xmlns:functx="http://www.functx.com">
    <xsl:output method="html" encoding="UTF-8" doctype-public="-//W3C//DTD XHTML 1.1//EN"
                doctype-system="http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd"
                indent="yes" />
    <!-- Supprime les espaces blancs pour tous les éléments --> 
    <xsl:strip-space elements="*"/>
    
    <xsl:template match="listPathos">
        <html>
            <body>
                <br/>
                <br/>
                <br/>
                <br/>
                <br/>
                <ul>
                    <li>Nombre:<xsl:value-of select="count(pathologie)"/></li>
                </ul>
            </body>
        </html>
    </xsl:template>
    
    <xsl:function name="functx:nombre-pathos" as="xs:integer">
        <xsl:sequence select="count(pathologie)"/>
    </xsl:function>
</xsl:stylesheet>