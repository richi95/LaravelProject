<style>
        /* Paginator */
        ul.pagination {
            display: flex;
            justify-content: flex-end;
        }
        ul.pagination li {
            width: 2rem;
            height: 2rem;
            border-left: 1px solid #ffffff;
            background-color: #cdd7dd;
            display: inline-flex;
            justify-content: center;
            align-items: center;
        }
        ul.pagination li:first-child { border-radius: 3px 0 0 3px; }
        ul.pagination li:last-child { border-radius: 0 3px 3px 0; }
        ul.pagination li a, ul.pagination li span {
            color: #ffffff;
        }
        ul.pagination li.active { background-color: #34cae0; }
        ul.pagination li.active span { color: #000000; }
        ul.pagination li a:hover { color: #ed7b3d; }
</style>