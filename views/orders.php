<div class="c-sb-section c-sb-section--toggle">
	<div class="c-sb-section__title js-sb-toggle" style="font-size: 15px; padding: 6px 0 10px 0;">
		<i class="icon-cart icon-sb" style="font-size: 19px; margin-right: 3px; top: 4px;"></i>Orders<i class="caret sb-caret" style="margin-top: 4px;"></i>
	</div>
	<div class="c-sb-section__body">
		<ul class="c-sb-list c-sb-list--compact" style="padding-bottom: 0;">
			<?php foreach ($orders as $order_id => $order): ?>
				<?php do_action( 'edd_helpscout_before_order_list_item', $order, $helpscout_data ); ?>
				<li class="c-sb-list-item" style="padding-top: 16px;">
					<span class="c-sb-list-item__text t-tx-charcoal-500" style="font-size: 85%;">
					Order: <a href="<?= $order['url'] ?>">#<?= $order['id'] ?></a> - <?= $order['total'] ?> <span class="badge <?= $order['status_color'] ?>" style="font-size: 85%; padding: 3px 4px; margin: -1px 0 0 4px;"><?= $order['status_label'] ?></span>
					</span>
				</li>
				<?php foreach ($order['items'] as $item): ?>
					<li class="c-sb-list-item--bullet" style="list-style-type: none; font-size: 14px; padding: 4px 0 2px 0;">
						<strong><?= $item['title'] ?></strong>
					</li>
				<?php endforeach ?>
				<li class="c-sb-list-item">
					<span class="c-sb-list-item__label t-tx-charcoal-500" style="padding-bottom: 4px;">
						<?php do_action( 'edd_helpscout_order_list_item_data_start', $order, $helpscout_data ); ?>
						<span class="c-sb-list-item__text t-tx-charcoal-500" style="font-size: 11px;">
							<?php if (!empty($item['price_option'])): ?><?= $item['price_option'] ?> - <?php endif ?>
							<?= $order['payment_method'] ?><br><?= $order['date'] ?>
						</span>
						<?php do_action( 'edd_helpscout_order_list_item_data_end', $order, $helpscout_data ); ?>
					</span>
				</li>
				<?php do_action( 'edd_helpscout_after_order_list_item', $order, $helpscout_data ); ?>
				<li role="separator" class="c-sb-list-divider" style="margin-bottom: -1px; padding-top: 16px;"></li>
			<?php endforeach ?>
		</ul>
	</div>
</div>
