<!--
Whenever a new customer visits abc.com, their shopping cart is initially empty. Once the customer starts shopping, the cart can receive any of the following requests:

add : <item_name>: the <item_name> item was added to the cart;
remove : <item_name>: all <item_name> items were removed from the cart;
quantity_upd : <item_name> : <value>: the <item_name> quantity in the cart was changed by <value>, which is an integer in the format +a or -a;
checkout: the customer has paid and the cart is now empty.
Given a list of requests in the formats described above, return the state of the cart after they have been processed. Elements in the cart should be returned in the order they were received.

Example

For

requests = ["add : milk",
            "add : pickles",
            "remove : milk",
            "add : milk",
            "quantity_upd : pickles : +4"]
the output should be
solution(requests) = ["pickles : 5", "milk : 1"];

For

requests = ["add : rock",
            "add : paper",
            "add : scissors",
            "checkout",
            "add : golden medal"]
the output should be
solution(requests) = ["golden medal : 1"].

Note: You are allowed to lookup official documentations only.

-->

<?php
	function solution($input) {
		
		// TODO
	}
