<nav aria-label="Page navigation example">
    <ul class="pagination justify-content-center">
        @if($pagination->currentPage === 1)
            <li class="page-item disabled">
                <a class="page-link" href="#" tabindex="-1">Previous</a>
            </li>
            <li class="page-item active">
                <span class="page-link">{{$pagination->currentPage}}<span class="sr-only">(current)</span></span>
            </li>
            <li class="page-item"><a class="page-link" href="{{$pagination->nextPageUrl}}">{{$pagination->nextPage}}</a></li>
            <li class="page-item">
                <a class="page-link" href="{{$pagination->nextPageUrl}}">Next</a>
            </li>
        @elseif ($pagination->currentPage === $pagination->lastPage)
            <li class="page-item">
                <a class="page-link" href="{{$pagination->previousPageUrl}}" tabindex="-1">Previous</a>
            </li>
            <li class="page-item"><a class="page-link" href="{{$pagination->previousPageUrl}}">{{$pagination->previousPage}}</a></li>
            <li class="page-item active">
                <span class="page-link">{{$pagination->currentPage}}<span class="sr-only">(current)</span></span>
            </li>
            <li class="page-item disabled">
                <a class="page-link" href="#">Next</a>
            </li>
        @else
            <li class="page-item">
                <a class="page-link" href="{{$pagination->previousPageUrl}}" tabindex="-1">Previous</a>
            </li>
            <li class="page-item"><a class="page-link" href="{{$pagination->previousPageUrl}}">{{$pagination->previousPage}}</a></li>
            <li class="page-item active">
                <span class="page-link">{{$pagination->currentPage}}<span class="sr-only">(current)</span></span>
            </li>
            <li class="page-item"><a class="page-link" href="{{$pagination->nextPageUrl}}">{{$pagination->nextPage}}</a></li>
            <li class="page-item">
            <a class="page-link" href="{{$pagination->nextPageUrl}}">Next</a>
            </li>
        @endif
        
    </ul>
</nav>