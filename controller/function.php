<?php

function paginate($item_per_page, $current_page, $total_records, $total_pages) {
	$pagination = '';

	$next = $current_page + 1;
	$previous = $current_page - 1;


		$pagination .= "<ul class='pagination'>";

			if($current_page > 1){
				$pagination .= ' <li class="page-item">
      <a class="page-link" href="news?page='.$previous.'" aria-label="Previous">
        <span aria-hidden="true">&laquo;</span>
      </a>
    </li>';
			} if($current_page != 1){
				$pagination .= ' <li class="page-item"><a class="page-link" href="news?page='.$previous.'">'.$previous.'</a></li>';
			}
				$pagination .= ' <li class="page-item active"><a class="page-link " href="news?page='.$current_page.'">'.$current_page.'</a></li>';

				if($current_page != $total_pages){
				$pagination .= ' <li class="page-item"><a class="page-link" href="news?page='.$next.'">'.$next.'</a></li>';
					}


			if($current_page >= 1 and $current_page != $total_pages){
				$pagination .= ' <li class="page-item">
      <a class="page-link" href="news?page='.$next.'" aria-label="Previous">
         <span aria-hidden="true">&raquo;</span>
      </a>
    </li>';
			}

		$pagination .= "</ul>";
	return $pagination; //return pagination links
}


function booking($x){

	$booking_data = [];
	return $booking_data;

}


?>