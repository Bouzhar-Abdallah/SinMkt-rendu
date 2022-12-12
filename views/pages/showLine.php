<tr class="text-dgray">
                                <td class="px-4 py-3">
                                    <div class="flex items-center text-sm">
                                        <div class="relative hidden w-12 h-12 mr-3 rounded-full md:block">
                                            <!-- <img src="../images/collection/arrivals1.png" alt="" srcset=""> -->
                                            
                                            <?php echo '<img src="data:image/jpeg;base64,'. base64_encode($value["image"]) .'" />'; ?>
                                        </div>
                                        <div >
                                            <p class="font-semibold"><?php echo $value["nom"] ?></p>
                                            <p class="text-xs text-ngray "><?php echo $value["categorie"] ?></p>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-4 py-3"><?php echo $value["prix"] ?> $</td>
                                <td class="px-4 py-3"><?php echo $value["quantite"] ?></td>
                                <td class="px-4 py-3 h-20"><?php echo $value["description"] ?></td>
                                <td class="px-4 py-3">
                                    <div class="flex items-center space-x-4 text-sm">
                                        <div class=" w-6 h-6  rounded-full md:block">
                                            <a href="<?php echo $_SERVER["PHP_SELF"] ?>?a=newProductLine">
                                                <img src="../icons/add2.svg" alt="" srcset="">
                                            </a>
                                        </div>
                                        <div class=" w-6 h-6  rounded-full md:block">
                                            
                                            <a href="<?php echo $_SERVER["PHP_SELF"] ?>?a=updateProduct&id=<?php echo $value["id_$choice"] ?>">
                                                <img src="../icons/edit2.svg" alt="" srcset="">
                                            </a>
                                        </div>
                                        <div class=" w-6 h-6   rounded-full md:block">
                                        <a href="index.php<?php echo '?c='.$choice.'&a=delete&id='.$value["id_$choice"] ?>">
                                                <img src="../icons/delete2.svg" alt="" srcset="">
                                            </a>
                                        </div>
                                        
                                    </div></td>
                            </tr>