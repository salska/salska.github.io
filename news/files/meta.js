(function() {
	var Realmac = Realmac || {};

	Realmac.meta = {
		
		// Set the browser title
		//
		// @var String text
		setTitle: function(text) {
			return document.title = text;
		},
		
		// Set the content attribute of a meta tag
		//
		// @var String name
		// @var String content
		setTagContent: function(tag, content){
			// If the tag being set is title
			// return the result of setTitle
			if ( tag === 'title' )
			{
				return this.setTitle(content);
			}
			
			// Otherwise try and find the meta tag
			var tag = this.getTag(tag);
			
			// If we have a tag, set the content
			if ( tag !== false )
			{
				return tag.setAttribute('content', content);
			}
			
			return false;
		},
		
		// Find a meta tag
		//
		// @var String name
		getTag: function(name) {
			var meta = document.querySelectorAll('meta');
			
			for ( var i=0; i<meta.length; i++ )
			{
				if (meta[i].name == name){
					return meta[i];
				}
			}
			
			var tag = document.createElement('meta');
			tag.name = name;
			document.getElementsByTagName('head')[0].appendChild(tag);
			
			return tag;
		}
	};
 
	// Object containing all website meta info
	var websiteMeta = {"277340c36d4b47e89a86ffd2c90acbc3-2.html":"RBS Website Migration to AEM 6.1 goes live. Several RBS brand websites serving Personal and Business customer segments in the UK and Ireland were migr","category-banking.html":"A list of posts in category &ldquo;Banking&rdquo;","tag-sso.html":"Posts tagged &ldquo;SSO&rdquo;","category-aem.html":"A list of posts in category &ldquo;AEM&rdquo;","ba7b370f30657cfc6dae614a1b4cdf59-3.html":"Adobe AEM Solution Partner. We are delighted to announce that eMetrix Consulting has been accepted as a Community AEM Solution Partner. A wealth of ex","category-healthcare.html":"A list of posts in category &ldquo;Healthcare&rdquo;","tag-data-migration.html":"Posts tagged &ldquo;Data Migration&rdquo;","tag-solution-partner.html":"Posts tagged &ldquo;Solution Partner&rdquo;","tag-security.html":"Posts tagged &ldquo;Security&rdquo;","5e6e119d3ab23544ce692cd9501825ba-4.html":"MyAccount signin service to mygovscot due to go live! Our latest project with the Improvement Service to refresh and renew a major national single sig","category-camunda.html":"A list of posts in category &ldquo;Camunda&rdquo;","category-asset-manager.html":"A list of posts in category &ldquo;Asset Manager&rdquo;","category-public-sector.html":"A list of posts in category &ldquo;Public Sector&rdquo;","category-insurance.html":"A list of posts in category &ldquo;Insurance&rdquo;","tag-cloud.html":"Posts tagged &ldquo;Cloud&rdquo;","tag-digital.html":"Posts tagged &ldquo;Digital&rdquo;","tag-adobe.html":"Posts tagged &ldquo;Adobe&rdquo;"};
 
	// pageId must match the key in websiteMeta object
	var url = window.location.pathname;
	var pageId = url.substring(url.lastIndexOf('/')+1);
	if (!pageId || pageId.length == 0){
		pageId = 'index.html';
	}
	pageMeta = websiteMeta[pageId];
 
	// If we have meta for this page
	if (pageMeta){
		Realmac.meta.setTagContent('description', pageMeta);
	}
 
 })();