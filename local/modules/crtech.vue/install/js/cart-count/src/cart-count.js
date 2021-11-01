// @flow

import {Tag} from 'main.core';

type CartCountOptions = {
	name: string;
};

export class CartCount
{
	name: string;

	constructor(options: CartCountOptions = {name: 'CartCount'})
	{
		this.name = options.name;
	}

	setName(name: string)
	{
		this.name = name;
	}

	getName()
	{
		return this.name;
	}

	render(): HTMLElement
	{
		return Tag.render`
			<div class="ui-cart-count">
				<span class="ui-cart-count-name">${this.getName()}</span>
			</div>
		`;
	}
}