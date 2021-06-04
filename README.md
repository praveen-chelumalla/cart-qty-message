# cart-qty-message

# Module Endaxis QtyMessage

## Main Functionalities
While checkout cart item qty reach as per expectation display custom message.

## Installation
\* = in production please use the `--keep-generated` option

### Type 1: Zip or clone the module

 - Unzip the zip file in `app/code/Endaxis`
 - Enable the module by running `php bin/magento module:enable Endaxis_QtyMessage`
 - Apply database updates by running `php bin/magento setup:upgrade`\*
 - Flush the cache by running `php bin/magento cache:flush`

## Configuration

- Stores >> Configuration >> Sales >> Checkout >> Shopping Cart >> Enable Custom Message Qty Incremental
- Stores >> Configuration >> Sales >> Checkout >> Shopping Cart >> Cart Item Quantity
- Stores >> Configuration >> Sales >> Checkout >> Shopping Cart >> Success Message
