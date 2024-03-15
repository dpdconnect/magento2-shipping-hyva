<?php
/**
 * This file is part of the Magento 2 Shipping module of DPD Nederland B.V.
 *
 * Copyright (C) 2019  DPD Nederland B.V.
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <https://www.gnu.org/licenses/>.
 */

namespace DpdConnect\ShippingHyva\ViewModel;

use DpdConnect\Sdk\Exceptions\AuthenticateException;
use DpdConnect\Sdk\Exceptions\HttpException;
use DpdConnect\Shipping\Model\CheckoutConfigProvider;
use Magento\Framework\View\Element\Block\ArgumentInterface;

class CheckoutConfig implements ArgumentInterface
{
    private CheckoutConfigProvider $_checkoutConfigProvider;

    public function __construct(CheckoutConfigProvider $checkoutConfigProvider)
    {
        $this->_checkoutConfigProvider = $checkoutConfigProvider;
    }

    /**
     * @throws AuthenticateException
     * @throws HttpException
     */
    public function getConfig(): array
    {
        return $this->_checkoutConfigProvider->getConfig();
    }
}
