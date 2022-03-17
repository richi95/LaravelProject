        /* Studentlist table */

        header.listHead {
            display: flex;
            justify-content: space-between;
            margin-bottom: 2vmax;
        }
        header.listHead > h2, header.listHead > div, header.listHead > nav {
            display: inline-flex;
            justify-content: center;
            align-items: center;
            font-size: 1rem;
        }
        header.listHead > div {
            background-color: #34cae0;
            border-radius: 3px;
            border: 1px solid #2cc0d5;
        }
        header.listHead > div > a {
            color: #ffffff;
            padding: 0 1rem;
        }
        .fa-edit {
            border-radius: 3px 0 0 3px;
            background-color: #2cc0d5;
            color: #ffffff;
            font-size: 1.5rem;
            padding: 0.3rem 0.5rem 0.2rem 0.5rem;
        }
        header.listHead > div > a:hover { color: #ed7b3d; }
        table { width: 100%; }
        th, td {
            vertical-align: middle;
            text-align: left;
            padding: 0.75rem;
        }
        th:first-child, td:first-child {
            padding-left: 0;
        }
        th:last-child, td:last-child {
            text-align: right;
            padding-right: 0;
        }
        th, legend {
            color: #9ca8af;
            font-weight: normal;
        }
        .avatar {
            height: 2rem;
            border: 1px solid black;
            border-radius: 1rem;
            vertical-align: baseline;
        }
        .avatar:hover {
            opacity: 0.4;
            border-color: #ed7b3d;
        }
