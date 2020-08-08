<?php
/**
 * @package     Joomla.Administrator
 * @subpackage  com_victorianflora
 *
 * @copyright   Copyright (C) 2005 - 2018 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

// No direct access to this file
defined('_JEXEC') or die('Restricted Access');
?>
<form action="index.php?option=com_victorianflora&view=victorianfloras" method="post" id="adminForm" name="adminForm">
	<table class="table table-striped table-hover">
		<thead>
		<tr>
			<th width="1%"><?php echo JText::_('COM_VICTORIANFLORA_NUM'); ?></th>
			<th width="2%">
				<?php echo JHtml::_('grid.checkall'); ?>
			</th>
			<th width="10%">
				<?php echo JText::_('COM_VICTORIANFLORA_VICTORIANFLORAS_PLANTNO') ;?>
			</th>
			<th width="50%">
				<?php echo JText::_('COM_VICTORIANFLORA_VICTORIANFLORAS_BOTANICALNAME') ;?>
			</th>
			<th width="30%">
				<?php echo JText::_('COM_VICTORIANFLORA_VICTORIANFLORAS_COMMONNAME') ;?>
			</th>
			<th width="5%">
				<?php echo JText::_('COM_VICTORIANFLORA_PUBLISHED'); ?>
			</th>
			<th width="2%">
				<?php echo JText::_('COM_VICTORIANFLORA_ID'); ?>
			</th>
		</tr>
		</thead>
		<tfoot>
			<tr>
				<td colspan="5">
					<?php echo $this->pagination->getListFooter(); ?>
				</td>
			</tr>
		</tfoot>
		<tbody>
			<?php if (!empty($this->items)) : ?>
				<?php foreach ($this->items as $i => $row) : 
				$link = JRoute::_('index.php?option=com_victorianflora&task=victorianflora.edit&id=' . $row->id);
				?>
					<tr>
						<td>
							<?php echo $this->pagination->getRowOffset($i); ?>
						</td>
						<td>
							<?php echo JHtml::_('grid.id', $i, $row->id); ?>
						</td>
						<td>
							<?php echo $row->PlantNo; ?>
						</td>
						<td>
							<a href="<?php echo $link; ?>" title="<?php echo JText::_('COM_VICTORIANFLORA_EDIT_VICTORIANFLORA'); ?>">
								<?php echo $row->BotanicalName; ?>
							</a>
						</td>
						<td>
							<?php echo $row->CommonName ; ?>
						</td>
						<td align="center">
							<?php echo JHtml::_('jgrid.published', $row->published, $i, 'victorianfloras.', true, 'cb'); ?>
						</td>
						<td align="center">
							<?php echo $row->id; ?>
						</td>
					</tr>
				<?php endforeach; ?>
			<?php endif; ?>
		</tbody>
	</table>
	<input type="hidden" name="task" value="" />
	<input type="hidden" name="boxchecked" value="0" />
	<?php echo JHtml::_('form.token'); ?>
</form>