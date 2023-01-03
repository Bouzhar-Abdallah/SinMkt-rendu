<tr class="text-dgray">
                                <!-- add -->
                                <form action="../pages/?c=<?php echo $choice ;?>&a=update&id=<?php echo $id ;?>" id="productInfo" name="productInfo" method="post" enctype="multipart/form-data">
                                <td class="px-4 py-3">
                                    <div class="flex items-center text-sm">
                                        <div class="relative w-12 h-12 mr-3 rounded-lg md:block">
                                            <label class="cursor-pointer" for="image">
                                                <img src="../icons/upload.svg" alt="" srcset="">
                                            </label>
                                            <input type="file" class="hidden" name="image" id="image">
                                            
                                            
                                            
                                            
                                        </div>
                                        <div class="flex flex-col gap-y-2" >
                                            
                                        <input value="<?php echo $value["nom"] ?>" name="produit" class="rounded-lg p-1 w-full border-solid drop-shadow-md " placeholder="nom produit" type="text">
                                        <input value="<?php echo $value["categorie"] ?>" name="categorie" class="rounded-lg p-1 w-full border-solid drop-shadow-md " placeholder="categorie" type="text">
                                        </div>
                                    </div>
                                </td>
                                <td class="px-4 py-3">
                                    <input value="<?php echo $value["prix"] ?>" name="prix" class="rounded-lg p-1 w-full border-solid drop-shadow-md " placeholder="prix" type="number">
                                </td>
                                <td class="px-4 py-3">
                                    <input value="<?php echo $value["quantite"] ?>" name="quantite" class="rounded-lg p-1 w-full border-solid drop-shadow-md " placeholder="quantité" type="number">
                                </td>
                                <td class="px-4 py-3 h-20">
                                    <div class="form-group">
                                      <textarea  class="p-1 form-control rounded-lg w-full border-solid drop-shadow-md " name="description" id="" placeholder="description" rows="3"><?php echo $value["description"] ?></textarea>
                                    </div>
                                    
                                </td>
                                <td class="px-4 py-3">
                                    <div class="flex items-center space-x-4 text-sm">
                                        
                                        <button class=" w-6 h-6  rounded-lg md:block" form="productInfo" type="submit">
                                            <img src="../icons/save.svg" alt="" srcset="">
                                        </button>
                                        
                                        <div class=" w-6 h-6  rounded-lg md:block">
                                            <a href="?a=cancel">
                                            <img src="../icons/cancel.svg" alt="" srcset="">
                                            </a>
                                        </div>
                                        
                                        
                                    </div>
                                </td>
                            <!-- end add -->
                            
                            </form>
                            </tr>