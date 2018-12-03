<nav aria-label="Page navigation example">
    <ul class="pagination justify-content-center">
        @if($currentPage === 1)
            <li class="page-item disabled">
                <a class="page-link" href="#" tabindex="-1">Previous</a>
            </li>
            <li class="page-item active">
                <span class="page-link">{{$currentPage}}<span class="sr-only">(current)</span></span>
            </li>
            <li class="page-item"><a class="page-link" href="/?page={{$nextPage}}">{{$nextPage}}</a></li>
            <li class="page-item">
                <a class="page-link" href="/?page={{$nextPage}}">Next</a>
            </li>
        @elseif ($currentPage === $lastPage)
            <li class="page-item">
                <a class="page-link" href="?page={{$previousPage}}" tabindex="-1">Previous</a>
            </li>
            <li class="page-item"><a class="page-link" href="?page={{$previousPage}}">{{$previousPage}}</a></li>
            <li class="page-item active">
                <span class="page-link">{{$currentPage}}<span class="sr-only">(current)</span></span>
            </li>
            <li class="page-item">
                <a class="page-link disabled" href="#">Next</a>
            </li>
        @else
            <li class="page-item">
                <a class="page-link" href="?page={{$previousPage}}" tabindex="-1">Previous</a>
            </li>
            <li class="page-item"><a class="page-link" href="?page={{$previousPage}}">{{$previousPage}}</a></li>
            <li class="page-item active">
                <span class="page-link">{{$currentPage}}<span class="sr-only">(current)</span></span>
            </li>
            <li class="page-item"><a class="page-link" href="/?page={{$nextPage}}">{{$nextPage}}</a></li>
            <li class="page-item">
                <a class="page-link" href="/?page={{$nextPage}}">Next</a>
            </li>
        @endif
        
    </ul>
</nav>