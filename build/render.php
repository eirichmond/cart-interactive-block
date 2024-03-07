<?php
/**
 * PHP file to use when rendering the block type on the server to show on the front end.
 *
 * The following variables are exposed to the file:
 *     $attributes (array): The block attributes.
 *     $content (string): The block default content.
 *     $block (WP_Block): The block instance.
 *
 * @see https://github.com/WordPress/gutenberg/blob/trunk/docs/reference-guides/block-api/block-metadata.md#render
 */

// Generate unique id for aria-controls.
$unique_id = wp_unique_id( 'p-' );
global $post;
?>

<div
data-wp-interactive="create-block">

<ul data-wp-context='{
  "list": [
    { "id": "123", "product": "Foo", "cost": "10" },
    { "id": "324", "product": "Bar", "cost": "34" },
    { "id": "545", "product": "Baz", "cost": "666" }
  ]
}'>
  <template
    data-wp-each--items="context.list"
    data-wp-each-key="context.items.id"
  >
    <li><span data-wp-text="context.items.product"></span> | <span data-wp-text="context.items.cost"></span> | <span><button>Add</button></span></li>
  </template>
</ul>

    <table width="100%" data-wp-context='{
        
    "list": [
        { "id": "123", "product": "Foo", "cost": "10" },
        { "id": "324", "product": "Bar", "cost": "34" },
        { "id": "545", "product": "Baz", "cost": "666" }
    ],
    "counter": 0
    }' data-wp-watch="callbacks.logCounter">
        <thead>
            <tr>
                <th style="text-align:left;">Product</th>
                <th style="text-align:right;">Cost</th>
                <th></th>
            </tr>
        </thead>
        <template
        data-wp-each--items="context.list"
        data-wp-each-key="context.items.id"
        >
        <tr>
            <td style="text-align:left;"><span data-wp-text="context.items.product"></span></td>
            <td style="text-align:right;">&pound;<span data-wp-text="context.items.cost"></span></td>
            <td style="text-align:right;"><button data-wp-on--click="actions.increaseCounter">Add</button></td>
        </tr>
        </template>
        <tr>
            <td>Counter: <span data-wp-text="context.counter"></span></td>
        </tr>
    </table>

    <!-- <div data-wp-context='{ "counter": 0 }' data-wp-watch="callbacks.logCounter">
        <p>Counter: <span data-wp-text="context.counter"></span></p>
        <button data-wp-on--click="actions.increaseCounter">+</button>
        <button data-wp-on--click="actions.decreaseCounter">-</button>
    </div>
 -->
</div>

