# Work on the documentation

Documentation is based on `markdown` and the static site is build with [mkdocs material](https://squidfunk.github.io/mkdocs-material/). The
API documentation is generated by [dog](https://klitsche.github.io/dog/) as markdown.

Serve documentation on http://localhost:8000/

    docker-compose run --rm php74 composer prepare-docs
    docker-compose up mkdocs

Build static site in folder site

    docker-compose run --rm php74 composer prepare-docs
    docker-compose run --rm mkdocs build