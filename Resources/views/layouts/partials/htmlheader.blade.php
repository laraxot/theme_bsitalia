<head>

<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
{{--  
<meta name="description" content="{{ page.description | default: site.description | smartify }}" />
<meta name="author" content="{{ site.authors }}" />
<meta name="generator" content="Jekyll v{{ jekyll.version }}" />
--}}

<title>
    {{--  
  {%- if page.title -%} {{ page.title | smartify }} · {{ site.title | smartify }} {%- else -%} {{ site.title | smartify }} · {{ site.description | smartify }}
  {%- endif -%}
  --}}
  TITOLO
</title>
{{--  
{% if page.comuni %}
<!--Bootstrap comuni CSS-->
<link href="{{ site.baseurl }}/dist/css/bootstrap-italia-comuni.min.css?{{ buildTime }}" rel="stylesheet" />
{% else %}
<!-- Bootstrap core CSS -->
<link href="{{ site.baseurl }}/dist/css/bootstrap-italia.min.css?{{ buildTime }}" rel="stylesheet" />
{% endif %}
--}}

<link href="/dist/css/bootstrap-italia-comuni.min.css" rel="stylesheet" />

{{--  
<!-- Documentation extras -->
{% if page.layout == "docs" %} {% comment %}La ricerca è gestita con Algolia DocSearch https://github.com/algolia/docsearch{% endcomment %}
<link href="https://cdn.jsdelivr.net/npm/docsearch.js@2.6.2/dist/cdn/docsearch.min.css" rel="stylesheet" />
{% endif %}
<link href="{{ site.baseurl }}/docs/assets/dist/css/docs.min.css?{{ buildTime }}" rel="stylesheet" />
--}}

{{--  
{% include favicons.html %} 
--}}

{{--  
{% include social.html %}
--}}

</head>
