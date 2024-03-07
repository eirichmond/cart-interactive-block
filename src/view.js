/**
 * WordPress dependencies
 */
import { store, getContext } from '@wordpress/interactivity';

store( "create-block", {
	actions: {
		increaseCounter: () => {
		  const context = getContext();
		  context.counter++;
		},
		decreaseCounter: () => {
			const context = getContext();
		  context.counter--;
		},
	  },
	  callbacks: {
		logCounter: () => {
		  const { counter } = getContext();
		  console.log("Counter is " + counter + " at " + new Date() );
		},
	  },
} );