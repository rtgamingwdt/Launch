package me.rtgamingwdt.Launch;

import org.bukkit.ChatColor;
import org.bukkit.command.Command;
import org.bukkit.command.CommandSender;
import org.bukkit.entity.Player;
import org.bukkit.plugin.java.JavaPlugin;

public class Main extends JavaPlugin {
  
  @Override
  public void onEnable() {
    
  }
  
  @Override
  public void onDisable() {
    
  }
  
  public boolean onCommand(CommandSender sender, Command cmd, String label, String[] args) {
    if(label.equalsIgnoreCase("launch")) {
      if(!(sender instanceof Player)) {
        sender.sendMessage("*Console goes flying*");
        return true;
      }
      Player player = (Player) sender;
      if(args.length == 0) {
        player.sendMessage(ChatColor.LIGHT_PURPLE + "Zooooom!");
        player.setVelocity(player.getLocation().getDirection().multiply(2).setY(2));
        
        return true;
      }
      
      player.sendMessage(ChatColor.LIGHT_PURPLE + "Zooooom!");
      player.setVelocity(player.getLocation().getDirection().multiply(Integer.parseInt(args[0])).setY(2));

    }
    return false;
  }
}
