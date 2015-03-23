
<div class="container">
    <div class="row">
        <div class="page-header">
            <h1>{$article->getTitle()|unescape:"htmlall"} <small>{$article->getDate()->getDayOfMonth()}/{$article->getDate()->getMonth()}/{$article->getDate()->getYear()}</small></h1>
        </div>
        <div>
            <p>{$article->getText()|unescape:"htmlall"}</p>
        </div>
    </div>
</div>