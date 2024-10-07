<?php

namespace frm;

class Pagination
{
    public int $pages_count;
    //public int $current_page;
    public string $uri;
    public int $mid_size = 3;
    public int $all_pages = 10;

    function __construct(
        public int $page = 1,
        public int $per_page = 1,
        public int $total = 1,
    )
    {
        $this->pages_count = $this->getPagesCount();
        $this->page = $this->getCurrentPage();
        $this->uri = $this->getParams();
        $this->mid_size = $this->getMidSize();
    }

    private function getPagesCount(): int
    {
        return ceil($this->total / $this->per_page);
    }

    private function getCurrentPage(): int
    {
        if ($this->page < 1 || $this->page > $this->pages_count) {
            abort();
        }

        return $this->page;
    }

    public function getStart(): int
    {
        return ($this->page - 1) * $this->per_page;
    }

    private function getParams(): string
    {
        $url = explode("?", $_SERVER['REQUEST_URI']);
        $uri = $url[0];
        if (isset($url[1]) and $url[1] != '') {
            $uri .= '?';
            $params = explode('&', $url[1]);
            foreach ($params as $param) {
                if (!str_contains($param, 'page=')) {
                    $uri .= "{$param}&";
                }
            }
        }

        return $uri;
    }

    public function getHTML(): string
    {
        $back = '';
        $forward = '';
        $start_page = '';
        $end_page = '';
        $pages_left = '';
        $pages_right = '';

        if ($this->page > 1) {
            $back = "<li class=''><a href='" . $this->getLink($this->page - 1) . "' class=''>&lt;</a></li>";
        }

        if ($this->page < $this->pages_count) {
            $forward = "<li class=''><a href='" . $this->getLink($this->page + 1) . "' class=''>&gt;</a></li>";
        }

        if ($this->page > $this->mid_size + 1) {
            $start_page = "<li class=''><a href='" . $this->getLink(1) . "'>&laquo;</a></li>";
        }

        if ($this->page < ($this->pages_count - $this->mid_size)) {
            $end_page = "<li class=''><a href='" . $this->getLink($this->pages_count) . "'>&raquo;</a></li>";
        }

        for ($i = $this->mid_size; $i > 0; $i--) {
            if ($this->page - $i > 0) {
                $pages_left .= "<li><a href='" . $this->getLink($this->page - $i) . "'>" . ($this->page - $i) . "</a></li>";
            }
        }

        for ($i = 1; $i <= $this->mid_size; $i++) {
            if ($this->page + $i <= $this->pages_count) {
                $pages_right .= "<li><a href='" . $this->getLink($this->page + $i) . "'>" . ($this->page + $i) . "</a></li>";
            }
        }

        return '<ul>' . $start_page . $back . $pages_left . '<li><a>' . $this->page . '</a></li>' . $pages_right . $forward . $end_page . '</ul>';
    }

    private function getLink($page): string
    {
        if (str_contains($this->uri, '&') || str_contains($this->uri, '?')) {
            return "{$this->uri}page={$page}";
        } else {
            return "{$this->uri}?page={$page}";
        }
    }

    private function getMidSize(): int
    {
        return $this->pages_count <= $this->all_pages ? $this->pages_count : $this->mid_size;
    }

    public function __toString(): string
    {
        // TODO: Implement __toString() method.
        return $this->getHTML();
    }
}