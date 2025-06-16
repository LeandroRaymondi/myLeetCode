<?php

/**
 * Definition for a singly-linked list.
 * class ListNode {
 *     public $val = 0;
 *     public $next = null;
 *     function __construct($val = 0, $next = null) {
 *         $this->val = $val;
 *         $this->next = $next;
 *     }
 * }
 */
class Solution
{

    /**
     * 876. Middle of the Linked List
     * Time Complexity: O(n)
     * Space Complexity: O(1)
     * @param ListNode $head
     * @return ListNode
     */
    function middleNode($head)
    {
        $slow = $head;
        $fast = $head;
        while ($fast && $fast->next) {
            $slow = $slow->next;
            $fast = $fast->next->next;
        }
        return $slow;
    }
}