parse xml like:
```xml
<?xml version="1.0" encoding="UTF-8"?>
<system-data-structure>
	<admin>
		<account-name> iuwww2</account-name>
		<staging-url>https://iuwww2.sitehost-test.iu.edu</staging-url>
		<live-url>https://www.iu.edu</live-url>
		<page-extension>.html</page-extension>
		<includes>PHP</includes>
		<navigation>PHP-Enabled</navigation>
		<brand-version>3.2.x</brand-version>
		<assets-server-url>https://assets.iu.edu/</assets-server-url>
	</admin>
	<site-info>
		<campus>IU</campus>
		<site-title>Indiana University</site-title>
		<theme>Mahogany</theme>
		<dropdown>No</dropdown>
		<emergency>Yes</emergency>
	</site-info>
	<social-media>
		<facebook>
			<username>IndianaUniversity</username>
			<app-id></app-id>
		</facebook>
		<twitter>
			<username>IndianaUniv</username>
		</twitter>
		<googleplus>
			<username></username>
		</googleplus>
		<youtube>
			<username>iu</username>
			<type>User</type>
		</youtube>
		<instagram>
			<username></username>
		</instagram>
		<pinterest>
			<username></username>
		</pinterest>
		<linkedin>
			<username>indiana-university</username>
			<type>Company</type>
		</linkedin>
		<vimeo>
			<username></username>
		</vimeo>
		<flickr>
			<username></username>
		</flickr>
	</social-media>
</system-data-structure>

```

into:
```PHP
Array
(
    [0] => stdClass Object
        (
            [type] => group
            [identifier] => admin
            [structuredDataNodes] => stdClass Object
                (
                    [structuredDataNode] => Array
                        (
                            [0] => stdClass Object
                                (
                                    [type] => text
                                    [identifier] => account-name
                                    [structuredDataNodes] => 
                                    [text] =>  iuwww2
                                    [assetType] => 
                                    [blockId] => 
                                    [blockPath] => 
                                    [fileId] => 
                                    [filePath] => 
                                    [pageId] => 
                                    [pagePath] => 
                                    [symlinkId] => 
                                    [symlinkPath] => 
                                    [recycled] => 
                                )

                            [1] => stdClass Object
                                (
                                    [type] => text
                                    [identifier] => staging-url
                                    [structuredDataNodes] => 
                                    [text] => https://iuwww2.sitehost-test.iu.edu
                                    [assetType] => 
                                    [blockId] => 
                                    [blockPath] => 
                                    [fileId] => 
                                    [filePath] => 
                                    [pageId] => 
                                    [pagePath] => 
                                    [symlinkId] => 
                                    [symlinkPath] => 
                                    [recycled] => 
                                )

                            [2] => stdClass Object
                                (
                                    [type] => text
                                    [identifier] => live-url
                                    [structuredDataNodes] => 
                                    [text] => https://www.iu.edu
                                    [assetType] => 
                                    [blockId] => 
                                    [blockPath] => 
                                    [fileId] => 
                                    [filePath] => 
                                    [pageId] => 
                                    [pagePath] => 
                                    [symlinkId] => 
                                    [symlinkPath] => 
                                    [recycled] => 
                                )

                            [3] => stdClass Object
                                (
                                    [type] => text
                                    [identifier] => page-extension
                                    [structuredDataNodes] => 
                                    [text] => .html
                                    [assetType] => 
                                    [blockId] => 
                                    [blockPath] => 
                                    [fileId] => 
                                    [filePath] => 
                                    [pageId] => 
                                    [pagePath] => 
                                    [symlinkId] => 
                                    [symlinkPath] => 
                                    [recycled] => 
                                )

                            [4] => stdClass Object
                                (
                                    [type] => text
                                    [identifier] => includes
                                    [structuredDataNodes] => 
                                    [text] => PHP
                                    [assetType] => 
                                    [blockId] => 
                                    [blockPath] => 
                                    [fileId] => 
                                    [filePath] => 
                                    [pageId] => 
                                    [pagePath] => 
                                    [symlinkId] => 
                                    [symlinkPath] => 
                                    [recycled] => 
                                )

                            [5] => stdClass Object
                                (
                                    [type] => text
                                    [identifier] => navigation
                                    [structuredDataNodes] => 
                                    [text] => PHP-Enabled
                                    [assetType] => 
                                    [blockId] => 
                                    [blockPath] => 
                                    [fileId] => 
                                    [filePath] => 
                                    [pageId] => 
                                    [pagePath] => 
                                    [symlinkId] => 
                                    [symlinkPath] => 
                                    [recycled] => 
                                )

                            [6] => stdClass Object
                                (
                                    [type] => text
                                    [identifier] => brand-version
                                    [structuredDataNodes] => 
                                    [text] => 3.2.x
                                    [assetType] => 
                                    [blockId] => 
                                    [blockPath] => 
                                    [fileId] => 
                                    [filePath] => 
                                    [pageId] => 
                                    [pagePath] => 
                                    [symlinkId] => 
                                    [symlinkPath] => 
                                    [recycled] => 
                                )

                            [7] => stdClass Object
                                (
                                    [type] => text
                                    [identifier] => assets-server-url
                                    [structuredDataNodes] => 
                                    [text] => https://assets.iu.edu/
                                    [assetType] => 
                                    [blockId] => 
                                    [blockPath] => 
                                    [fileId] => 
                                    [filePath] => 
                                    [pageId] => 
                                    [pagePath] => 
                                    [symlinkId] => 
                                    [symlinkPath] => 
                                    [recycled] => 
                                )

                        )

                )

            [text] => 
            [assetType] => 
            [blockId] => 
            [blockPath] => 
            [fileId] => 
            [filePath] => 
            [pageId] => 
            [pagePath] => 
            [symlinkId] => 
            [symlinkPath] => 
            [recycled] => 
        )

    [1] => stdClass Object
        (
            [type] => group
            [identifier] => site-info
            [structuredDataNodes] => stdClass Object
                (
                    [structuredDataNode] => Array
                        (
                            [0] => stdClass Object
                                (
                                    [type] => text
                                    [identifier] => campus
                                    [structuredDataNodes] => 
                                    [text] => IU
                                    [assetType] => 
                                    [blockId] => 
                                    [blockPath] => 
                                    [fileId] => 
                                    [filePath] => 
                                    [pageId] => 
                                    [pagePath] => 
                                    [symlinkId] => 
                                    [symlinkPath] => 
                                    [recycled] => 
                                )

                            [1] => stdClass Object
                                (
                                    [type] => text
                                    [identifier] => site-title
                                    [structuredDataNodes] => 
                                    [text] => Indiana University
                                    [assetType] => 
                                    [blockId] => 
                                    [blockPath] => 
                                    [fileId] => 
                                    [filePath] => 
                                    [pageId] => 
                                    [pagePath] => 
                                    [symlinkId] => 
                                    [symlinkPath] => 
                                    [recycled] => 
                                )

                            [2] => stdClass Object
                                (
                                    [type] => text
                                    [identifier] => theme
                                    [structuredDataNodes] => 
                                    [text] => Mahogany
                                    [assetType] => 
                                    [blockId] => 
                                    [blockPath] => 
                                    [fileId] => 
                                    [filePath] => 
                                    [pageId] => 
                                    [pagePath] => 
                                    [symlinkId] => 
                                    [symlinkPath] => 
                                    [recycled] => 
                                )

                            [3] => stdClass Object
                                (
                                    [type] => text
                                    [identifier] => dropdown
                                    [structuredDataNodes] => 
                                    [text] => No
                                    [assetType] => 
                                    [blockId] => 
                                    [blockPath] => 
                                    [fileId] => 
                                    [filePath] => 
                                    [pageId] => 
                                    [pagePath] => 
                                    [symlinkId] => 
                                    [symlinkPath] => 
                                    [recycled] => 
                                )

                            [4] => stdClass Object
                                (
                                    [type] => text
                                    [identifier] => emergency
                                    [structuredDataNodes] => 
                                    [text] => Yes
                                    [assetType] => 
                                    [blockId] => 
                                    [blockPath] => 
                                    [fileId] => 
                                    [filePath] => 
                                    [pageId] => 
                                    [pagePath] => 
                                    [symlinkId] => 
                                    [symlinkPath] => 
                                    [recycled] => 
                                )

                        )

                )

            [text] => 
            [assetType] => 
            [blockId] => 
            [blockPath] => 
            [fileId] => 
            [filePath] => 
            [pageId] => 
            [pagePath] => 
            [symlinkId] => 
            [symlinkPath] => 
            [recycled] => 
        )

    [2] => stdClass Object
        (
            [type] => group
            [identifier] => social-media
            [structuredDataNodes] => stdClass Object
                (
                    [structuredDataNode] => Array
                        (
                            [0] => stdClass Object
                                (
                                    [type] => group
                                    [identifier] => facebook
                                    [structuredDataNodes] => stdClass Object
                                        (
                                            [structuredDataNode] => Array
                                                (
                                                    [0] => stdClass Object
                                                        (
                                                            [type] => text
                                                            [identifier] => username
                                                            [structuredDataNodes] => 
                                                            [text] => IndianaUniversity
                                                            [assetType] => 
                                                            [blockId] => 
                                                            [blockPath] => 
                                                            [fileId] => 
                                                            [filePath] => 
                                                            [pageId] => 
                                                            [pagePath] => 
                                                            [symlinkId] => 
                                                            [symlinkPath] => 
                                                            [recycled] => 
                                                        )

                                                    [1] => stdClass Object
                                                        (
                                                            [type] => text
                                                            [identifier] => app-id
                                                            [structuredDataNodes] => 
                                                            [text] => 
                                                            [assetType] => 
                                                            [blockId] => 
                                                            [blockPath] => 
                                                            [fileId] => 
                                                            [filePath] => 
                                                            [pageId] => 
                                                            [pagePath] => 
                                                            [symlinkId] => 
                                                            [symlinkPath] => 
                                                            [recycled] => 
                                                        )

                                                )

                                        )

                                    [text] => 
                                    [assetType] => 
                                    [blockId] => 
                                    [blockPath] => 
                                    [fileId] => 
                                    [filePath] => 
                                    [pageId] => 
                                    [pagePath] => 
                                    [symlinkId] => 
                                    [symlinkPath] => 
                                    [recycled] => 
                                )

                            [1] => stdClass Object
                                (
                                    [type] => group
                                    [identifier] => twitter
                                    [structuredDataNodes] => stdClass Object
                                        (
                                            [structuredDataNode] => stdClass Object
                                                (
                                                    [type] => text
                                                    [identifier] => username
                                                    [structuredDataNodes] => 
                                                    [text] => IndianaUniv
                                                    [assetType] => 
                                                    [blockId] => 
                                                    [blockPath] => 
                                                    [fileId] => 
                                                    [filePath] => 
                                                    [pageId] => 
                                                    [pagePath] => 
                                                    [symlinkId] => 
                                                    [symlinkPath] => 
                                                    [recycled] => 
                                                )

                                        )

                                    [text] => 
                                    [assetType] => 
                                    [blockId] => 
                                    [blockPath] => 
                                    [fileId] => 
                                    [filePath] => 
                                    [pageId] => 
                                    [pagePath] => 
                                    [symlinkId] => 
                                    [symlinkPath] => 
                                    [recycled] => 
                                )

                            [2] => stdClass Object
                                (
                                    [type] => group
                                    [identifier] => googleplus
                                    [structuredDataNodes] => stdClass Object
                                        (
                                            [structuredDataNode] => stdClass Object
                                                (
                                                    [type] => text
                                                    [identifier] => username
                                                    [structuredDataNodes] => 
                                                    [text] => 
                                                    [assetType] => 
                                                    [blockId] => 
                                                    [blockPath] => 
                                                    [fileId] => 
                                                    [filePath] => 
                                                    [pageId] => 
                                                    [pagePath] => 
                                                    [symlinkId] => 
                                                    [symlinkPath] => 
                                                    [recycled] => 
                                                )

                                        )

                                    [text] => 
                                    [assetType] => 
                                    [blockId] => 
                                    [blockPath] => 
                                    [fileId] => 
                                    [filePath] => 
                                    [pageId] => 
                                    [pagePath] => 
                                    [symlinkId] => 
                                    [symlinkPath] => 
                                    [recycled] => 
                                )

                            [3] => stdClass Object
                                (
                                    [type] => group
                                    [identifier] => youtube
                                    [structuredDataNodes] => stdClass Object
                                        (
                                            [structuredDataNode] => Array
                                                (
                                                    [0] => stdClass Object
                                                        (
                                                            [type] => text
                                                            [identifier] => username
                                                            [structuredDataNodes] => 
                                                            [text] => iu
                                                            [assetType] => 
                                                            [blockId] => 
                                                            [blockPath] => 
                                                            [fileId] => 
                                                            [filePath] => 
                                                            [pageId] => 
                                                            [pagePath] => 
                                                            [symlinkId] => 
                                                            [symlinkPath] => 
                                                            [recycled] => 
                                                        )

                                                    [1] => stdClass Object
                                                        (
                                                            [type] => text
                                                            [identifier] => type
                                                            [structuredDataNodes] => 
                                                            [text] => User
                                                            [assetType] => 
                                                            [blockId] => 
                                                            [blockPath] => 
                                                            [fileId] => 
                                                            [filePath] => 
                                                            [pageId] => 
                                                            [pagePath] => 
                                                            [symlinkId] => 
                                                            [symlinkPath] => 
                                                            [recycled] => 
                                                        )

                                                )

                                        )

                                    [text] => 
                                    [assetType] => 
                                    [blockId] => 
                                    [blockPath] => 
                                    [fileId] => 
                                    [filePath] => 
                                    [pageId] => 
                                    [pagePath] => 
                                    [symlinkId] => 
                                    [symlinkPath] => 
                                    [recycled] => 
                                )

                            [4] => stdClass Object
                                (
                                    [type] => group
                                    [identifier] => instagram
                                    [structuredDataNodes] => stdClass Object
                                        (
                                            [structuredDataNode] => stdClass Object
                                                (
                                                    [type] => text
                                                    [identifier] => username
                                                    [structuredDataNodes] => 
                                                    [text] => 
                                                    [assetType] => 
                                                    [blockId] => 
                                                    [blockPath] => 
                                                    [fileId] => 
                                                    [filePath] => 
                                                    [pageId] => 
                                                    [pagePath] => 
                                                    [symlinkId] => 
                                                    [symlinkPath] => 
                                                    [recycled] => 
                                                )

                                        )

                                    [text] => 
                                    [assetType] => 
                                    [blockId] => 
                                    [blockPath] => 
                                    [fileId] => 
                                    [filePath] => 
                                    [pageId] => 
                                    [pagePath] => 
                                    [symlinkId] => 
                                    [symlinkPath] => 
                                    [recycled] => 
                                )

                            [5] => stdClass Object
                                (
                                    [type] => group
                                    [identifier] => pinterest
                                    [structuredDataNodes] => stdClass Object
                                        (
                                            [structuredDataNode] => stdClass Object
                                                (
                                                    [type] => text
                                                    [identifier] => username
                                                    [structuredDataNodes] => 
                                                    [text] => 
                                                    [assetType] => 
                                                    [blockId] => 
                                                    [blockPath] => 
                                                    [fileId] => 
                                                    [filePath] => 
                                                    [pageId] => 
                                                    [pagePath] => 
                                                    [symlinkId] => 
                                                    [symlinkPath] => 
                                                    [recycled] => 
                                                )

                                        )

                                    [text] => 
                                    [assetType] => 
                                    [blockId] => 
                                    [blockPath] => 
                                    [fileId] => 
                                    [filePath] => 
                                    [pageId] => 
                                    [pagePath] => 
                                    [symlinkId] => 
                                    [symlinkPath] => 
                                    [recycled] => 
                                )

                            [6] => stdClass Object
                                (
                                    [type] => group
                                    [identifier] => linkedin
                                    [structuredDataNodes] => stdClass Object
                                        (
                                            [structuredDataNode] => Array
                                                (
                                                    [0] => stdClass Object
                                                        (
                                                            [type] => text
                                                            [identifier] => username
                                                            [structuredDataNodes] => 
                                                            [text] => indiana-university
                                                            [assetType] => 
                                                            [blockId] => 
                                                            [blockPath] => 
                                                            [fileId] => 
                                                            [filePath] => 
                                                            [pageId] => 
                                                            [pagePath] => 
                                                            [symlinkId] => 
                                                            [symlinkPath] => 
                                                            [recycled] => 
                                                        )

                                                    [1] => stdClass Object
                                                        (
                                                            [type] => text
                                                            [identifier] => type
                                                            [structuredDataNodes] => 
                                                            [text] => Company
                                                            [assetType] => 
                                                            [blockId] => 
                                                            [blockPath] => 
                                                            [fileId] => 
                                                            [filePath] => 
                                                            [pageId] => 
                                                            [pagePath] => 
                                                            [symlinkId] => 
                                                            [symlinkPath] => 
                                                            [recycled] => 
                                                        )

                                                )

                                        )

                                    [text] => 
                                    [assetType] => 
                                    [blockId] => 
                                    [blockPath] => 
                                    [fileId] => 
                                    [filePath] => 
                                    [pageId] => 
                                    [pagePath] => 
                                    [symlinkId] => 
                                    [symlinkPath] => 
                                    [recycled] => 
                                )

                            [7] => stdClass Object
                                (
                                    [type] => group
                                    [identifier] => vimeo
                                    [structuredDataNodes] => stdClass Object
                                        (
                                            [structuredDataNode] => stdClass Object
                                                (
                                                    [type] => text
                                                    [identifier] => username
                                                    [structuredDataNodes] => 
                                                    [text] => 
                                                    [assetType] => 
                                                    [blockId] => 
                                                    [blockPath] => 
                                                    [fileId] => 
                                                    [filePath] => 
                                                    [pageId] => 
                                                    [pagePath] => 
                                                    [symlinkId] => 
                                                    [symlinkPath] => 
                                                    [recycled] => 
                                                )

                                        )

                                    [text] => 
                                    [assetType] => 
                                    [blockId] => 
                                    [blockPath] => 
                                    [fileId] => 
                                    [filePath] => 
                                    [pageId] => 
                                    [pagePath] => 
                                    [symlinkId] => 
                                    [symlinkPath] => 
                                    [recycled] => 
                                )

                            [8] => stdClass Object
                                (
                                    [type] => group
                                    [identifier] => flickr
                                    [structuredDataNodes] => stdClass Object
                                        (
                                            [structuredDataNode] => stdClass Object
                                                (
                                                    [type] => text
                                                    [identifier] => username
                                                    [structuredDataNodes] => 
                                                    [text] => 
                                                    [assetType] => 
                                                    [blockId] => 
                                                    [blockPath] => 
                                                    [fileId] => 
                                                    [filePath] => 
                                                    [pageId] => 
                                                    [pagePath] => 
                                                    [symlinkId] => 
                                                    [symlinkPath] => 
                                                    [recycled] => 
                                                )

                                        )

                                    [text] => 
                                    [assetType] => 
                                    [blockId] => 
                                    [blockPath] => 
                                    [fileId] => 
                                    [filePath] => 
                                    [pageId] => 
                                    [pagePath] => 
                                    [symlinkId] => 
                                    [symlinkPath] => 
                                    [recycled] => 
                                )

                        )

                )

            [text] => 
            [assetType] => 
            [blockId] => 
            [blockPath] => 
            [fileId] => 
            [filePath] => 
            [pageId] => 
            [pagePath] => 
            [symlinkId] => 
            [symlinkPath] => 
            [recycled] => 
        )

)
```

which is the result from webservices