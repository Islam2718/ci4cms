<ul class="option-list">
                                            <?php $i=0; foreach ($productSize as $psizeData) { $i++; ?>
                                                <?php if(strpos($proData['product_size'], $psizeData['size'].'-') !== false){ ?>
                                            <li>
                                                <input type="radio" name="size<?= $psizeData['size']; ?>" id="dress<?= $psizeData['size']; ?>" value="<?= $psizeData['size']; ?>">
                                                <label for="dress<?= $psizeData['size']; ?>"><?= $psizeData['title']; ?></label>
                                            </li>
                                            <?php } ?>                                            
                                            <?php } ?>                                            
                                        </ul>