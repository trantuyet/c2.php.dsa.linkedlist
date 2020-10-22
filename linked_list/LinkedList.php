<?php


class LinkedList
{
    protected $firstNode;
    protected $lastNode;

    public function __construct()
    {
        $this->firstNode = null;
        $this->lastNode = null;
    }

    public function insertFirstNode($data)
    {
        $node = new Node($data);
        $node->link = $this->firstNode;
        $this->firstNode = $node;

        if (!$this->lastNode) {
            $this->lastNode = $node;
        }
    }

    public function insertLastNode($data)
    {
        $node = new Node($data);
        if (!$this->firstNode) {
            $this->insertFirstNode($data);
        } else {
            $this->lastNode->link = $node;
            $this->lastNode = $node;
        }

    }

    /**
     * @return null
     */
    public function getFirstNode()
    {
        return $this->firstNode;
    }

    /**
     * @return null
     */
    public function getLastNode()
    {
        return $this->lastNode;
    }

    public function insert($index, $data)
    {
        $node = new Node($data);

        if ($index < 0) {
            echo "Không thể thêm vào vị trí " . $index;
            exit();
        }

        if ($index == 0) {
            $this->insertFirstNode($data);
        }

        $i = 0;
        $currentIndex = $this->firstNode;

        while ($currentIndex->next !== null) {
            $currentIndex = $currentIndex->next;

            //Kiểm tra xem data truyền vào có trùng không, trùng thì break
            if ($currentIndex->data === $data) {
                break;
            }
        }

        if ($currentIndex !== null) {
            if ($currentIndex->next !== null) {
                $node->next = $currentIndex->next;
            }
            $currentIndex->next = $node;

        }
    }


    public function remove($index)
    {
        if ($this->firstNode !== null) {
            $preIndex = null;
            $currentIndex = $this->firstNode;

            while ($currentIndex->next !== null) {
                if ($currentIndex->data === $index) {
                    if ($preIndex === null) {
                        $this->firstNode = $currentIndex->next;
                    } else {
                        $preIndex->next = $currentIndex->next;
                    }

                }
                $preIndex = $currentIndex;
                $currentIndex = $currentIndex->next;
            }
            $this->_count--;
        }
    }
}