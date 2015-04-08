<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
  <xsl:template match="rss/channel">
    <html>
      <head>
        <title><xsl:value-of select="title" /></title>
        <link rel="stylesheet" href="http://belrss.monrezo.be/css/belrss.css" type="text/css" />
      </head>
      <body>
        <h1><xsl:value-of select="title" /></h1>
        <div class="item">
        <xsl:for-each select="item">
          <h2><xsl:value-of select="title" /></h2>
          <p><xsl:value-of select="description" /></p>
          <p><a href="{link}"><xsl:value-of select="link" /></a></p>
          <p class="pubdate" ><xsl:value-of select="pubDate" /></p>
        </xsl:for-each>
        </div>
      </body>
    </html>
  </xsl:template>
</xsl:stylesheet> 