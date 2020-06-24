<?php
class JU_Custom_Nav_Walker extends Walker_Nav_Menu
{
    public  function start_lvl(&$outpot, $depth = 0, $args = [])
    {
        $outpot  .=   '<ul class="special-class">';
    }

    public  function start_el(&$outpot, $item, $depth = 0, $args = [], $id = 0)
    {
        $outpot  .= '<li class="special-class-item">';
        $outpot  .= $args->before;
        $outpot   .= '<a href=" ' . $item->url . '">';
        $outpot   .= $args->link_before . $item->title . $args->link_after;
        $outpot    .= '</a>';
        $outpot  .= $args->after;
    }
    public function end_el(&$outpot, $item, $depth = 0, $args = [], $id = 0)
    {
        $outpot    .= '</li>';
    }

    public  function end_lvl(&$outpot, $depth = 0, $args = [])
    {
        $outpot  .=   '</ul>';
    }
}
